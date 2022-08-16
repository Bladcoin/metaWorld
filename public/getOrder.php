<?php
	require_once('../includes/visitor.inc.php');

	$orderId = (int)$_POST['id'];
	if (isset($orderId) && !empty($orderId)) {

	$order = dbQuery('orders', DB_ARRAY, array('where'=>"orderId = '$orderId'"));

	if(!$order) die(header('Location:'.'http://'.SITE_TRUE_URL.SITE_LANG_PATH));

	$userId = $_SESSION['siteUser']['userId'];
	if ($order['userId'] != $userId) die(header('Location:'.'http://'.SITE_TRUE_URL.SITE_LANG_PATH));

	$products = unserialize($order['productIds']);
	
	$smarty->assign('order', $order);
	$smarty->assign('products', $products);
	$smarty->display('modules/modal-order.tpl');
	} else {
	header('Location:'.'http://'.SITE_TRUE_URL.SITE_LANG_PATH);
	}
?>