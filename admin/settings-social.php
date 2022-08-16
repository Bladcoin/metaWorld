<?php
	include('../includes/admin.inc.php');
	if($adminUser['accessLevel']!='administrator' and $adminUser['accessLevel'] != 'developer')die(lang('general:accessIsDenied'));
	
	$social	= arrAddSlashes(getRequestVar('social','',$noEscape=true));
	$action			= getRequestVar('action');
	$page			= (int)getRequestVar('page');
	
	if(!empty($action['edit'])){
		
		if(empty($errors) && !empty($social['social_id'])){
			$where[] = "social_id = '$social[social_id]'";
			$social = dbQuery('settings_social', DB_ARRAYS, array('where' => $where));
			$smarty->assign('social', $social[0]);
		}
		
	}elseif(!empty($action['save'])){
		
		if(empty($social['name'])) $errors['name']=true;
		if(empty($social['visible_text'])) $social['visible_text'] = 0;
		
		if(empty($social['fileName'])){
			if($maxId = dbQuery('settings_social', DB_VALUE, array('fields'=>'MAX(social_id)'))){
				$social['fileName'] = $maxId + 1;
			} else {
				$social['fileName'] = 1;
			}
		} elseif(empty($social['social_id'])){
			if(dbQuery('settings_social', DB_VALUE, array('fields'=>'social_id', 'where'=>"LOWER(fileName)=LOWER('$social[fileName]')"))) $errors['fileNameExists'] = true;
		} else {
			if(dbQuery('settings_social', DB_VALUE, array('fields'=>'social_id', 'where'=>"social_id<>'$social[social_id]' AND LOWER(fileName)=LOWER('$social[fileName]')"))) $errors['fileNameExists'] = true;
		}
		if(preg_match('/^(page\d+|index)$/i', $social['fileName'])) $errors['fileNameProhibited'] = true;
		if(preg_match('/[^0-9a-zA-Z\-_\.,]/i', $social['fileName'])) $errors['fileNameCharacters'] = true; 
		
		
		if(empty($errors)){
			
			if(empty($social['social_id'])){
				dbQuery('settings_social',DB_INSERT,array('values'=>$social));
				$messages['saved']=true;
			}else{
				if(dbQuery('settings_social',DB_UPDATE,array('where'=>"social_id='$social[social_id]'",'values'=>$social))){
					$messages['saved']=true;
				}else{
					$errors['not_saved']=true;
				}
			}
		}else{
			$smarty->assign('action',array('edit'=>true));
			$smarty->assign('social',$social);
			$noItems=true;
		}
	}elseif(!empty($action['deleteSocial'])){
		$where[] = "social_id='$social[social_id]'";

		if(dbQuery('settings_social', DB_DELETE, array('where'=>$where))){

			echo "writeStatus('".lang('socials:messages:1')."');\r\n";
			echo "removeElement($social[social_id], 'social');\r\n";
			echo "window.setTimeout(\"writeStatus('')\", 3000);\r\n";
		} else {
			echo "writeStatus('".lang('socials:errors:2')."', 'aError');\r\n";
			echo "window.setTimeout(\"writeStatus('')\", 5000);\r\n";
		}
		exit;
	}
	if(empty($noItems)){
		if($page<1){
			$page=1;
			$smarty->assign('page',$page);
		}
		$itemsPerPage=45;
		
		$socials=dbQuery('settings_social',DB_ARRAYS,array('start'=>($page-1)*$itemsPerPage, 'limit'=>$itemsPerPage, 'indexKey'=>'social_id'));
		foreach($socials as $social_id=>$social){
			$socials[$social_id]['status']=lang('socials:statuses:'.$socials[$social_id]['status']);
		}
	
		$totalSocials=dbQuery('settings_social',DB_VALUE,array('fields'=>'COUNT(*)'));
		$pageNums=getPageNums($totalSocials, $page, $itemsPerPage,0,4,4,0);
		$smarty->assign('socials',$socials);
		
		$smarty->assign('pageNums',$pageNums);
	}
	
	$smarty->assign('statuses',lang('socials:statuses'));

		
		
	if(!empty($errors))$smarty->assign('errors',$errors);
	if(!empty($messages))$smarty->assign('messages',$messages);
	$smarty->display('settings-social.tpl');


?>