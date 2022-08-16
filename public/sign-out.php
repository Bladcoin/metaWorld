<?php
	require_once('../includes/visitor.inc.php');
	require_once("../includes/SiteUsers.php");
	$SiteUsers=new SiteUsers;
	$SiteUsers->refuseMe();
?>