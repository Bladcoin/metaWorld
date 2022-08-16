<?php
sleep(2);
    include('includes/overall.inc.php');

    global $smarty, $config;

    $htmlBody = '';
    $error    = '';
    $msg      = '';
    $date     = adjustTime(date('d-m-Y H:i'));
    $success  = false;
    $captcha_good = false;

  // Если необходим другой заголовок, вписать в поле <input type=""text" name="subject" value=" ">!!!!  
    //$SUBJECT  = 'Запрос на звонок';
  $user_name  = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
  $user_phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
  $user_prod = filter_input(INPUT_POST, 'prod', FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
  $user_email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
  $message    = strip_tags(filter_input(INPUT_POST, 'message', FILTER_SANITIZE_MAGIC_QUOTES), '<p><a><b><div>');
  // $user_vacancy  = filter_input(INPUT_POST, 'vacancy', FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);

  // функция для проверки длины строки
  function checkStringLength($string, $minLength, $maxLength) {
    $length = mb_strlen($string, 'UTF-8');
    if (($length < $minLength) || ($length > $maxLength)) {
      return false;
    }
    else {
      return true;
    }
  }

  
  $SUBJECT = $CONFIG_SUBJECT; 
  
  if (isset($user_name)) {
    if (!checkStringLength($user_name, 2, 30)) {
      $error .= 'name';
      $response = array('status' => '400', 'message' => $error);
      echo json_encode($response);
      die;
    }
  } else {
    $error .= 'name';
    $response = array('status' => '400', 'message' => $error);
    echo json_encode($response);
    die;
  }

  if (isset($user_email)) {
    if (empty($user_email)) {
      $error .= 'email';
      $response = array('status' => '400', 'message' => $error);
      echo json_encode($response);
      die;
    }
  }
  if (empty($user_phone)) {
  $error .= 'phone';
  $response = array('status' => '400', 'message' => $error);
  echo json_encode($response);
  die;
}

  
    
  // if (empty($user_name))  $user_name = ''; 
  // if (empty($user_phone)) $user_phone = '';
  // if (empty($user_email)) $user_email = '';
  if (empty($message))    $message = '';
   
  
  $arrayMessage = array_filter([
    'Дата отправки сообщения'=>$date,
    'Имя'=>$user_name,
    'Email'=>$user_email,
    'Номер'=>$user_phone,
    'Продукт'=>$user_prod,
    'Сообщение'=>$message
  ]);
  
  $txt = "<b>" . $SUBJECT . " - " . $SITENAME ."</b>%0A";
  foreach($arrayMessage as $key => $value) {
    $txt .= "<b>".$key.":</b> ".$value."%0A";
  }
  
  foreach($arrayMessage as $key => $value) {
    $htmlBody .= "<b>".$key.":</b> ".$value."<br/>";
  }
     
  if ($config['feedback_captcha_enabled'] = 1){ 
     
    if ($config['allow_recaptcha'] == 1) {
      
      if (isset($_POST['token'])) {
          $captcha_token = $_POST['token'];
      } else {
        $success = array('status'=>'captcha', 'message'=>'Капча работает некорректно. Обратитесь к администратору!');
      }
       
      $url = 'https://www.google.com/recaptcha/api/siteverify';
      $params = [
        'secret' => PRIVATE_REY,
        'response' => $captcha_token,
        'remoteip' => $_SERVER['REMOTE_ADDR']
      ];
    
      $cpth = curl_init($url);
      curl_setopt($cpth, CURLOPT_POST, 1);
      curl_setopt($cpth, CURLOPT_POSTFIELDS, $params);
      curl_setopt($cpth, CURLOPT_FOLLOWLOCATION, 1);
      curl_setopt($cpth, CURLOPT_HEADER, 0);
      curl_setopt($cpth, CURLOPT_RETURNTRANSFER, 1);
       
      $response = curl_exec($cpth);
      if(!empty($response)) $decoded_response = json_decode($response);
    
      if ($decoded_response && $decoded_response->success && $decoded_response->score > 0) {
        $success = $decoded_response->success;
        
        $captcha_good = true;
          
      } else {
          
          $success = array('status' => '400', 'message' => '* You did not pass the test, I am a robot 1');
        
      }
    
    } else {
      
        if (trim($_POST['anti-bot-a']) != date('Y')){
          if (trim($_POST['anti-bot-a']) != trim($_POST['anti-bot-q'])){
            $error .= 'Я робот! Подобрал капчу';
          } elseif (empty( $_POST['anti-bot-q'])) { 
            $error .= 'Ошибка: пустой ответ. ' . $_POST['anti-bot-q'];
          } else {
            $error .= 'Ошибка: ответ неправильный. ' . $_POST['anti-bot-q'];
          }
        } else {
          
          $captcha_good = true;
        
        }


      
    }
    
  } 
  
  if(empty($error) && $captcha_good == true){
        
      if ($config['telegram_send'] == 1){
    
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://api.telegram.org/bot'.TELEGRAM_TOKEN.'/sendMessage');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, 'chat_id='.TELEGRAM_CHATID.'&parse_mode=html&text='.$txt);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
         
        // Отправить сообщение
        $result = curl_exec($ch);
        curl_close($ch);
        
      }
    
      if ($transport_mail == 'smtp'){
          
        if(isset($_FILES['fileforsending'])) { 
          if($_FILES['fileforsending']['error'] == UPLOAD_ERR_OK){ 
            $mail->AddAttachment($_FILES['fileforsending']['tmp_name'], $_FILES['fileforsending']['name']); 
          } 
        }
        
        $mail->setFrom($user_server);                  // Ваш Email
        $mail->addAddress($TOEMAIL);               // Email получателя
        $mail->isHTML(true); 
        $mail->Subject = $SUBJECT . " - " . $SITENAME;
        $mail->Body    = $htmlBody; 
      
        if(!$mail->send()) {
          $error .= 'Ошибка: ' . $mail->ErrorInfo;
                $success = array('status' => '400', 'message' => $error);
        } else {
          $success = array('status' => '200');

        }
        
      }   
          
      if ($transport_mail == 'mail'){ 
        
        if (!empty($TOEMAIL)) {
          $headers  = "From: $user_name < $user_email>\n";
          $headers .= "Cc: $user_name < $user_email >\n";
          $headers .= "X-Sender: $user_name < $user_email >\n";
          $headers .= 'X-Mailer: PHP/' . phpversion();
          $headers .= "X-Priority: 1\n"; // Срочное сообщение!
          $headers .= "Return-Path: $user_email\n"; // Обратный путь для ошибок
          $headers .= "MIME-Version: 1.0\r\n";
          $headers .= "Content-Type: text/html; charset=$CHARSET\n";
          
          
          $body = "<html><head><title>Обратная связь</title><META HTTP-EQUIV=\"Content-Type\" CONTENT=\"text/html; charset=$CHARSET\"></head><body>" . $htmlBody . "</body></html>";
          // отправляем
          if (!mail($TOEMAIL, $SUBJECT, $body, $headers)) {
              $success = array('status' => '400');
          } else {
            $success = array('status' => '200','message' => $msg, 'name' => $user_name);


          } 
        }
        
      }
  }

  echo json_encode($success);
  exit;
