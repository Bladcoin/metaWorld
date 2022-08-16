<?php
	require_once('../includes/visitor.inc.php');
	require_once("../includes/SiteUsers.php");
	$SiteUsers=new SiteUsers;
	if(defined('SITE_URL')){
		global $smarty,$config;
		if(isset($_POST['change']['submit'])){
			$change=getRequestVar('change','',$noEscape=true);
			if(!empty($change)){
				if(empty($SiteUsers->errors) && $SiteUsers->changeUserData($change)){
					$messages['changed']=true;
					echo "1";
				}else{
					$smarty->assign('errors',$SiteUsers->errors);
					echo(json_encode($SiteUsers->errors));
				}
			}
		}else{
			//$change['gender']=$_SESSION['siteUser']['gender'];
			//$change['login']=$_SESSION['siteUser']['login'];
			$change['name']=$_SESSION['siteUser']['name'];
			$change['email']=$_SESSION['siteUser']['email'];
			$change['password']=$_SESSION['siteUser']['password'];
			//$change['phone']=$_SESSION['siteUser']['phone'];
			//$change['image']=$_SESSION['siteUser']['image'];
			$change['subscribe']=$_SESSION['siteUser']['subscribe'];
			$smarty->assign('change',$change);
			
		}
	}
	if(!empty($messages))$smarty->assign('messages',$messages);
	if(!empty($errors))$smarty->assign('errors',$errors);
?>