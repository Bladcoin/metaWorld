<?php
    require_once "../includes/overall.inc.php";
    require_once "../includes/visitor.inc.php";
    require_once "../includes/SiteUsers.php";

    global $smarty, $config;

    $success = false;
    $SiteUsers = new SiteUsers;

	if (isset($_POST['submit'] ) && $_POST['submit'] == 'edit') {
		$change = getRequestVar('change', '', $noEscape = true);
		if(!empty($change)){
			if (empty($SiteUsers->errors) && $SiteUsers->changeUserData($change)) {
                $success = array('code'=>1, 'msg'=>'Изменения сохранены!');
			} else {
                $success = array('code'=>0, 'msg'=>$SiteUsers->errors);
			}
		}

        echo json_encode($success);
        exit;

	} else {
		
		$change['name']   = $_SESSION['siteUser']['name'];
		$change['phone']       = $_SESSION['siteUser']['phone'];
		$change['subscribe']   = $_SESSION['siteUser']['subscribe'];
		
		$smarty->assign('change', $change);
		
	}