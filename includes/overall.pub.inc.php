<?php
	$adminSessionName   = 'ls-admin';
	$visitorSessionName = 'ls-visitor';
	$smarty->assign('adminSessionName', $adminSessionName);
	$smarty->assign('visitorSessionName', $visitorSessionName);	
	
	
	setlocale(LC_ALL, 'ru_RU.utf-8');
	
	$config['date'] = '%I:%M %p';
	$config['time'] = '%H:%M:%S';
	$smarty->assign('config',$config);
	$smarty->assign('yesterday', strtotime('0 day'));
	


	