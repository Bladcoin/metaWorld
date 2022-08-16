<?php
    require_once "../includes/overall.inc.php";
    require_once "../includes/visitor.inc.php";
    require_once "../includes/SiteUsers.php";

    global $smarty, $config;
    $success = false;
	$SiteUsers = new SiteUsers;

	if (isset($_POST['submit'] ) && $_POST['submit'] == 'edit') {
		$change = getRequestVar('change', '', $noEscape = true);
		if(!empty($change)){
			if (empty($SiteUsers->errors) && $SiteUsers->changeUserPwd($change)) {
                $success = array('code'=>1, 'msg'=>'Пароль изменен!');
            } else {
                $success = array('code'=>0, 'msg'=>$SiteUsers->errors);
			}
		}

        echo json_encode($success);
        exit;

	} else {

		$change['last_name']   = $_SESSION['siteUser']['last_name'];
		$change['first_name']  = $_SESSION['siteUser']['first_name'];
		$change['middle_name'] = $_SESSION['siteUser']['middle_name'];
		$change['phone']       = $_SESSION['siteUser']['phone'];
		$change['subscribe']   = $_SESSION['siteUser']['subscribe'];

		$smarty->assign('change', $change);

	}


	
	//if (!empty($messages)) $smarty->assign('messages', $messages);
	//if (!empty($errors))   $smarty->assign('errors', $errors);
	
	
    
    
/*
    require_once("includes/overall.inc.php");
    require_once('includes/visitor.inc.php');

    $userId = $_SESSION['siteUser']['userId'];
    //print_r($_POST);
	
	$error = '';
	
    if (isset($_POST['submit'] ) && $_POST['submit'] == 'edit') {

        $first_name    = filter_input(INPUT_POST, 'first_name', FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
        $middle_name   = filter_input(INPUT_POST, 'middle_name', FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
        $last_name     = filter_input(INPUT_POST, 'last_name', FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
        $phone         = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
        
 		$pwdOld        = filter_input(INPUT_POST, 'pwdold', FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
 		$pwdNew        = filter_input(INPUT_POST, 'pwdnew', FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
 		$pwdNewRepeat  = filter_input(INPUT_POST, 'pwdnewrepeat', FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);


 		if (empty($first_name)) { $error .= 'Введите Имя'; }
        
        if (empty($middle_name)) { $error .= 'Введите Отчество'; }
        
        if (empty($last_name)) { $error .= 'Введите фамилию'; }
        
        if (empty($phone)) { $error .= 'Введите телефон'; }
        
        if (!empty($_POST['subscribe'])) { $change['subscribe'] = $_POST['subscribe']; }
 		
        if (!empty($pwdNew)) {
        	
        	$pwdOldUser = dbQuery('site_users', DB_VALUE, array('where' => "userId='$userId'", 'fields' => 'password'));
        	print_r($pwdOldUser);
        	$pwdOld = md5($pwdOld);
        	
        	if ($pwdOldUser != $pwdOld){
            	
        	    $error .= 'Старый пароль неверный';
        	    
        	} else {
            	
 		  		if ($pwdNew != $pwdNewRepeat) {
     		  		
 					$error .= 'Введенные пароли не совпадают.';
 					
 		  		} else {
     		  		
 					$change['password'] = md5($pwdNew);
 		  		}
 			}
 		} 
         
        // print_r($error);
    

        if (empty($error)) {

            if(!empty($userId)){
     
                $change['first_name']   = $first_name;
                $change['middle_name']  = $middle_name;
                $change['last_name']    = $last_name;
                $change['phone']        = $phone;

//                 print_r($change);
                
                
                if(dbQuery('site_users', DB_UPDATE, array('where' => "userId='$userId'",  'values'=>$change))){

                    echo json_encode(['code'=>1, 'msg'=>'Изменения сохранены!']);  
          
                } else {

                    echo json_encode(['code'=>0, 'msg'=>'Вы не произвели изменений']); 
                }
           
            } 
   
        } else {
        
    	    echo json_encode(['code'=>0, 'msg'=>$error]); 
    	
        }
    
        exit;

    }
*/



