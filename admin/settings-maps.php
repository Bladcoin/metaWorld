<?php
	include('../includes/admin.inc.php');
	
	if($adminUser['accessLevel'] != 'administrator' && $adminUser['accessLevel'] != 'developer') die(lang('general:accessIsDenied'));

	$action   = getRequestVar('action');
	$maps = getRequestVar('maps', '', $noEscape = true);

	if(!empty($action['save'])){	
		if(empty($errors)){
			foreach($maps as $codename=>$value) {
				$maps['codename'] = mysqli_real_escape_string($MUSQLILINK, $codename);
				$maps['value'] 	= mysqli_real_escape_string($MUSQLILINK, $value);
				dbQuery('settings_maps', DB_REPLACE, array('values'=>$maps));
			}			
			$messages['saved'] = true;
		}
	}
    
	$maps = getSettingsMaps();
	$smarty->assign('maps', $maps);
		
	if(!empty($errors)) $smarty->assign('errors', $errors);
	if(!empty($messages)) $smarty->assign('messages', $messages);

	
	$smarty->display('settings-maps.tpl');
?>