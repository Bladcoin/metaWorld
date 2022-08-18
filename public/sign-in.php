<?php
require_once('../includes/visitor.inc.php');
require_once("../includes/SiteUsers.php");
$SiteUsers = new SiteUsers;
if (defined('SITE_URL')) {
	global $smarty, $config;
	$sign_in = getRequestVar('sign_in', '', $noEscape = true);

	if (!$sign_in ) {
		header('Location:' . SITE_URL);
	    die();
	}
	if ($sign_in) {
		$SiteUsers->checkLogin($sign_in['email'], $sign_in['password']);
		if ($SiteUsers->errors) {
			$errors = $SiteUsers->errors;
		}
	}
}
if (!empty($SiteUsers->messages)) $smarty->assign('messages', $SiteUsers->messages);
if (!empty($errors)) {
	$smarty->assign('errors', $errors);
}

$where[] = "sectionId='1'";
$section = dbQuery("sections", DB_ARRAY, array("where" => $where));

$smarty->assign("section", $section);

$smarty->display("index.tpl");