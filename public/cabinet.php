<?php
	if(!defined('SITE_URL')) die('Hacking attempt!');

	global $smarty, $config;
	
		if($page < 1){
			$page = 1;
			$smarty->assign('page', $page);
		}
		$itemsPerPage = 15;
		//$where = array();
		//$where[] ="orders.status !='ordering'";
		$userId = $_SESSION['siteUser']['userId'];
		
		$join['site_users'] = "USING(userId)";
		$where = "userId = $userId";
		$fields = 'SQL_CALC_FOUND_ROWS id, orders.status, paymentStatus, orderedOn, first_name, last_name, ip, productData, grandTotal';
		$orders = dbQuery('orders', DB_ARRAYS, array('where'=>$where, 'order'=>'orderedOn DESC', 'join'=>$join, 'fields'=>$fields, 'start'=>($page-1)*$itemsPerPage, 'limit'=>$itemsPerPage));
	
		$totalOrders = dbRawQuery("select found_rows() as total", '', 'total');
		$pageNums = getPageNums($totalOrders[0], $page, $itemsPerPage, 0, 4, 4, 0);
		
		/* подсчет кол-ва фото в заказе */
		$count = count($orders);
		for ($i=0; $i < $count; $i++){
			$detail_order[] = unserialize($orders[$i]['productData']);
			//print $i;
			$orders[$i]['quantity'] = count($detail_order[$i]);
		}
		
		$smarty->assign('totalOrders', $totalOrders);
		$smarty->assign('pageNums', $pageNums);
		$smarty->assign('orders', $orders);
?>