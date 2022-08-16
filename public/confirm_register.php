<?php

require_once('../includes/visitor.inc.php');
require_once("../includes/SiteUsers.php");

global $smarty;

$siteUser = new SiteUsers;

$user_id = getRequestVar("userId");
$code    = getRequestVar("code");

if ($user_id && $code) {
    $change_status = $siteUser->changeUserStatus($user_id, "active", $code);
} else {
    $siteUser->errors["failed"] = "Данной страницы не существует";
}

if (!empty($siteUser->errors)) {
    $smarty->assign("errors", $siteUser->errors);
}


if (!empty($siteUser->messages)) {
    $smarty->assign("messages", $siteUser->messages);
}

$smarty->display("confirm_register.tpl");
