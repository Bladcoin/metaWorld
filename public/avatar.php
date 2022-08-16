<?php
    require_once('../includes/visitor.inc.php');
    require_once("../includes/image-functions.inc.php");
	
	$userId = $_SESSION['siteUser']['userId'];
	
	if (!empty($userId)) {

    	if (!empty($_FILES['image'])) {	
        	
    		if (!empty($_FILES['image']) && is_uploaded_file($_FILES['image']['tmp_name'])) {
        		
    			if($images = createSiteUserImage($_FILES['image']['tmp_name'], $userId, '', $_FILES['image']['name'])){
        			
    				$userImages = dbQuery('site_user_images', DB_ARRAYS, array('where'=>"userId='$userId' AND codename<>''", 'indexKey'=>'codename'));
    				
    				foreach ($images as $codename=>$image) {
        				
    					if (!empty($userImages[$codename])) $image['imageId'] = $userImages[$codename]['imageId'];
    					
    					dbQuery('site_user_images', DB_REPLACE, array('values'=>$image));
    					
    				}
    				
    				$userUpdate['hasImage'] = 1;
    				
    			} else {
        			
    				die ('0');
    				
    			}
    		}
    		
    		if (!empty($userUpdate)) dbQuery('site_users', DB_UPDATE, array('where'=>"userId='$userId'", 'values'=>$userUpdate));
    		
            die ('1');
            
        } else {
            
            die('0');
            
        }
	} 


	if(!empty($errors)) $smarty->assign('errors', $errors);
	if(!empty($messages)) $smarty->assign('messages', $messages);

?>