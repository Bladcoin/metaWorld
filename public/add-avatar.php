<?php
	require_once("../includes/admin-functions.inc.php");
	
	$action  = getRequestVar('action');
	$site_user = arrAddSlashes(getRequestVar('site_user', '', $noEscape = true));
	$query   = getRequestVar('query');
	$status  = getRequestVar('status');
	$subscribe  = getRequestVar('subscribe');
	$page    = (int) getRequestVar('page');
	$userId     = getRequestVar('userId', 0);

	if(!empty($action['edit'])){
		$countries[0] = lang('general:country_select');
		$countries_temp = dbQuery('countries', DB_ARRAYS);
		for($i = 0; $i < count($countries_temp); $i ++) {
			$countries[$countries_temp[$i]['countryId']] = $countries_temp[$i]['title_' . $config['website_language']];
		}
		if(empty($errors) && !empty($site_user['userId'])){
			$where[] = "userId='$site_user[userId]'";
			if($site_user = dbQuery('site_users', DB_ARRAY, array('where'=>$where))){
				$site_user['password'] = '';
				$smarty->assign('site_user', $site_user);
			} else {
				$errors['site_user_not_found'] = true;
			}
		}
	} elseif(!empty($action['save'])){
		
		
		if(empty($site_user['email'])||!ereg('^[a-zA-Z0-9\._\-]+@[a-zA-Z0-9\.\-]+\.[a-z]{2,4}$',$site_user['email'])){
			$errors['email1'] = true;
		} else {
			if(!empty($site_user['userId'])){
				$temp = dbQuery('site_users', DB_ARRAY, array('fields'=>'email','where'=>'userId='.$site_user['userId']));
				if($temp['email']==$site_user['email']){
					$check=0;
				}else{
					$check=1;
				}
			} else {
				$check=1;
			}
			if($check){
				if(dbQuery('site_users', DB_VALUE, array('fields'=>'userId', 'where'=>"email='$site_user[email]'"))) $errors['email2'] = true;
			}
		}
		
		
		if(!empty($_FILES['image']) && is_uploaded_file($_FILES['image']['tmp_name'])) {
			if($images = createSiteUserImage($_FILES['image']['tmp_name'], $site_user['userId'], '', $_FILES['image']['name'])){
				$siteUserImages = dbQuery('site_user_images', DB_ARRAYS, array('where'=>"userId='$site_user[userId]' AND codename<>''", 'indexKey'=>'codename'));
				foreach($images as $codename=>$image){
					if(!empty($siteUserImages[$codename])) $image['imageId'] = $siteUserImages[$codename]['imageId'];
					dbQuery('site_user_images', DB_REPLACE, array('values'=>$image));
				}
				$siteUserUpdate['hasImage'] = 1;
			} else {
				$errors['image_not_saved'] = true;
			}
		}
		if(!empty($siteUserUpdate)) dbQuery('site_users', DB_UPDATE, array('where'=>"userId='$site_user[userId]'", 'values'=>$siteUserUpdate));
		$messages['saved'] = true;
		
		
						
		if(empty($site_user['userId'])){
			if(empty($site_user['password']))$errors['password'] = true;
		}
		
		if(empty($site_user['phone']))$errors['phone'] = true;
		if(empty($site_user['first_name']))$errors['first_name'] = true;
		
		if(empty($errors)){
			if(empty($site_user['userId'])){
				$site_user['activationCode'] = rand(100000, 999999);
				$site_user['password'] = md5($site_user['password']);
				$site_user['registredOn'] = date('Y-m-d');
				if($maxId = dbQuery('site_users', DB_VALUE, array('fields'=>'MAX(userId)'))){
					$site_user['userId'] = $maxId + 1;
				} else {
					$site_user['userId'] = 1;
				}
				$site_user['userId'] = dbQuery('site_users', DB_INSERT, array('values'=>$site_user));
				$messages['saved'] = true;
			} else {
				if(empty($errors)){
					if($site_user['password']){
						$site_user['password'] = md5($site_user['password']);
					}else{
						$temp = dbQuery('site_users', DB_ARRAY, array('fields'=>'password','where'=>'userId='.$site_user['userId']));
						$site_user['password'] = $temp['password'];
					}
					dbQuery('site_users', DB_UPDATE, array('where'=>"userId='$site_user[userId]'", 'values'=>$site_user));
					$messages['saved'] = true;
				}
			}
		}
	} elseif(!empty($action['deleteUserImage']) && !empty($site_user['userId'])){ // удаление картинки
		$where[] = "userId='$site_user[userId]'";

		/* checking access level */
		if($adminUser['accessLevel'] == 'writer') $where[] = "addedBy='$adminUser[userId]'";

		/* checking section permission */
		if(empty($adminUser['permitAllSections'])) $where[] = "sectionId IN(".implode(',', $allowedSections).")";

		/* deleting image */
		if($userId = dbQuery('site_users', DB_VALUE, array('where'=>$where, 'fields'=>'userId'))){
			$images = dbQuery('site_user_images', DB_ARRAYS, array('where'=>"userId='$userId' AND codename<>''", 'indexKey'=>'codename'));
			foreach($images as $image) @unlink(SITE_ROOT."/images/siteusers/$site_user[userId]/$image[fileName]");
			dbQuery('site_user_images', DB_DELETE, array('where'=>"userId='$userId' AND codename<>''"));
			dbQuery('site_users', DB_UPDATE, array('where'=>$where, 'values'=>"hasImage=0"));

			echo "writeStatus('".lang('articles:messages:1')."');\r\n";
			echo "document.getElementById('user_image').style.display='none';\r\n";
			echo "document.getElementById('deletingStatus').style.display='none';\r\n";
			echo "window.setTimeout(\"writeStatus('')\", 2000);\r\n";

			/* deleting empty directory */
			deleteIfEmpty(SITE_ROOT."/images/siteusers/$site_user[userId]");
			exit;
		} else {
			echo "writeStatus('".lang('site_users:errors:13')."', 'aError');\r\n";
			echo "window.setTimeout(\"writeStatus('')\", 5000);\r\n";
			exit;
		}
	} elseif(!empty($action['deleteSiteUser']) && !empty($site_user['userId'])){
		$where[] = "userId='$site_user[userId]'";

		/* checking access level */
		if($adminUser['accessLevel'] == 'writer') $where[] = "addedBy='$adminUser[userId]'";

		/* checking section permission */
		if(empty($adminUser['permitAllSections'])) $where[] = "sectionId IN(".implode(',', $allowedSections).")";

		/* deleting site_user */
		if(dbQuery('site_users', DB_DELETE, array('where'=>$where))){

			/* deleting comments */
			dbQuery('comments', DB_DELETE, array('where'=>"userId = '$site_user[userId]'"));

			/* deleting images */
			dbQuery('images', DB_DELETE, array('where'=>"userId='$site_user[userId]'"));

			/* deleting files */
			deleteDir(SITE_ROOT."/files/site_users/$site_user[userId]/");

			echo "writeStatus('".lang('site_users:messages:1')."');\r\n";
			echo "removeElement($site_user[userId], 'site_user');\r\n";
			echo "window.setTimeout(\"writeStatus('')\", 3000);\r\n";
		} else {
			echo "writeStatus('".lang('site_users:errors:13')."', 'aError');\r\n";
			echo "window.setTimeout(\"writeStatus('')\", 5000);\r\n";
		}
		exit;
	} elseif(!empty($action['approveSiteUser']) && !empty($site_user['userId'])){
		$where[] = "userId='$site_user[userId]'";

		/* approving site_user */
		if(dbQuery('site_users', DB_UPDATE, array('where'=>$where, 'values'=>"status='active'"))){
			echo "writeStatus('".lang('site_users:messages:2')."');\r\n";
			echo "document.getElementById('status-$site_user[userId]').innerHTML = 'Активен';\r\n";
			echo "window.setTimeout(\"writeStatus('')\", 3000);\r\n";
		} else {
			echo "writeStatus('".lang('site_users:errors:13')."', 'aError');\r\n";
			echo "window.setTimeout(\"writeStatus('')\", 5000);\r\n";
		}
		exit;
	/***** CUT FOR DEMO END *****/
	}

	if(empty($noItems)){
		$where = array();

		/* processing search fields */
		if(!empty($query)) $where[] = "email LIKE '%$query%' OR name LIKE '%$query%' OR address LIKE '%$query%' OR phone LIKE '%$query%'";
		if(!empty($status)) $where[] = "status='$status'";

		$fields = array('userId', 'name', 'registredOn');
		$site_users = dbQuery('site_users', DB_ARRAYS, array('start'=>($page-1)*$itemsPerPage, 'limit'=>$itemsPerPage, 'order'=>'registredOn DESC', 'where'=>$where));
		
		foreach($site_users as $userId=>$site_user){
			$uid = $site_user['userId'];
			$orders = dbQuery("orders", DB_ARRAYS, array('where'=>"userId='$uid'"));
			
		
			foreach ($orders as $order) $arr[] = $order['grandTotal'];
			$site_users[$userId]['grandTotal'] = @array_sum($arr);
			unset($arr);
			
		}

	}
	//if(!empty($errors)) $smarty->assign('errors', $errors);
	//if(!empty($messages)) $smarty->assign('messages', $messages);

?>