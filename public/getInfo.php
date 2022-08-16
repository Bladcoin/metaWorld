<?php
	require_once('../includes/visitor.inc.php');
	$artId = (int)$_POST['id'];
	if (isset($artId) && !empty($artId)) {
	$smarty->assign('artId', $artId);
	$smarty->display('modules/modal-prod.tpl');
	} else {
	header('Location:'.'http://'.SITE_TRUE_URL.SITE_LANG_PATH);
	}
?>