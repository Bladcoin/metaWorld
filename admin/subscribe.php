<?php
    include('../includes/admin.inc.php');
    if($adminUser['accessLevel'] != 'administrator' && $adminUser['accessLevel'] != 'developer') die(lang('general:accessIsDenied'));

    $action  = getRequestVar('action');
    $adminEmail = $config['feedback_email'];
    $adminName = $config['company_name'];
    
    if (isset($_POST['subject']) && !empty($_POST['subject']) && !empty($_POST['message'])) {
    	
    	$subject  = $_POST['subject'];
    	$htmlBody = stripslashes($_POST['message']);
  		
  		$headers  = "From: $adminName < $adminEmail>\n";
      $headers .= "Cc: $adminName < $adminEmail >\n";
      $headers .= "X-Sender: $adminName < $adminEmail >\n";
      $headers .= 'X-Mailer: PHP/' . phpversion();
      $headers .= "X-Priority: 1\n"; // Срочное сообщение!
      $headers .= "Return-Path: $adminName\n"; // Обратный путь для ошибок
      $headers .= "MIME-Version: 1.0\r\n";
      $headers .= "Content-Type: text/html; charset=$CHARSET\n";
	    
      
	    $body = "<html><head><title>$subject</title><META HTTP-EQUIV=\"Content-Type\" CONTENT=\"text/html; charset=$CHARSET\"></head><body>" . $htmlBody . "</body></html>";
      	
  		$subscribes = dbQuery('customers', DB_ARRAYS, array('fields'=>'userId, email', 'where'=>"subscribe='yes'"));
      foreach($subscribes as $subscribe){
        mail($subscribe['email'], $subject, $body, $headers);
      }

    	
    }
    
/*
    	$subject   = '=?'.$config['charset'].'?B?'.base64_encode($subj).'?=';
  		$message   = chunk_split(base64_encode($mess), 68, "\n");
  		$headers   = "From: $config[feedback_email]\nContent-Type: text/html; charset=$config[charset]\nMIME-Version: 1.0\nContent-Transfer-Encoding: base64";
  		
    
*/
    $smarty->display('subscribe.tpl');
    
?>