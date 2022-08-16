<?php
require_once('../includes/visitor.inc.php');
require_once("../includes/SiteUsers.php");

$siteUser = new SiteUsers;

$forgot_password = getRequestVar("forgot_password");
$userId = getRequestVar("userId");
$code   = getRequestVar("code");

global $smarty;

if ($forgot_password["email"]) {
    $siteUser->forgotPassword($forgot_password["email"]);
    if (!empty($siteUser->errors)) {
        $smarty->assign("errors", $siteUser->errors);
    } elseif (!empty($siteUser->messages)) {
        $smarty->assign("messages", $siteUser->messages);
    }

    $smarty->display("confirm_register.tpl");
} else if ($userId && $code) {
    if ($siteUser->forgotPasswordCheckLink($userId, $code)) {
        $smarty->display("forgot-password.tpl");
    } else {
        $smarty->assign("errors", $siteUser->errors);
        $smarty->display("confirm_register.tpl");
    }
}
