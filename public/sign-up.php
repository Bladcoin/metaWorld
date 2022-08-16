<?php
require_once "../includes/overall.inc.php";
require_once "../includes/visitor.inc.php";
require_once "../includes/SiteUsers.php";

global $smarty, $config;
$SiteUsers = new SiteUsers;

$sign_up = getRequestVar('sign_up', '', $noEscape = true);
if (!empty($sign_up)) {

    if (isset($sign_up['offer']) && $sign_up['offer'] == 'on') {

        if (empty($SiteUsers->errors) && $SiteUsers->addNewUser($sign_up)) {

            $smarty->assign("messages", $SiteUsers->messages);
        } else {
            $smarty->assign("errors", $SiteUsers->errors);
        }
    } else {
        $smarty->assign("errors", $SiteUsers->errors);
    }
}
// $string = str_replace(SITE_URL, "" ,$_SERVER['HTTP_REFERER'] );
// $string = str_replace("/", "", $string );
// $languages = dbQuery("languages", DB_ARRAYS );
// $found_key = array_search($string, array_column($languages, 'codename'));

// $smarty->assign("lang", $languages[$found_key] );

$smarty->display("confirm_register.tpl");
