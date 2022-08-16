<?php
require_once('../includes/visitor.inc.php');
require_once("../includes/SiteUsers.php");

$siteUser = new SiteUsers;

$reset_password = getRequestVar("reset_password");



if ($reset_password) {
    global $smarty;
    if ($reset_password["userId"] && $reset_password["code"]) {
        if ($siteUser->forgotPasswordCheckLink($reset_password['userId'], $reset_password['code'])) {
            if ($reset_password["password"] && $reset_password["password2"]) {
                $siteUser->resetPassword($reset_password);
            } else {
                $siteUser->errors["failed"] = "При смене пароля произошла неизвестная ошибка. Попробуйте позже еще раз!";
            }
        }
    }

    if (!empty($siteUser->errors)) {
        $smarty->assign("errors", $siteUser->errors);
    }

    if (!empty($siteUser->messages)) {
        $smarty->assign("messages", $siteUser->messages);
    }

    $smarty->display("confirm_register.tpl");
}
