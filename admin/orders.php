<?php
	include('../includes/admin.inc.php');
	if($adminUser['accessLevel']!='administrator' and $adminUser['accessLevel'] != 'developer')die(lang('general:accessIsDenied'));
	
	$order	= arrAddSlashes(getRequestVar('order','',$noEscape=true));
	$action	= getRequestVar('action');
	$page		= (int)getRequestVar('page');
	
	
	if(!empty($action['edit'])){
		
		if(empty($errors) && !empty($order['orderId'])){
			
			$where[] = "orderId='$order[orderId]'";
			$order = dbQuery('orders', DB_ARRAY, array('where' => $where));
			
			$order['createdBy']  = langdate(adjustTime($order['createdBy'], false, 'd.m.Y H:i'));
			
			$smarty->assign('order', $order);
			
      //$where2[] = "type_content = 'products'";
      //$where2[] = "articleId IN ('". implode("','", array_keys(unserialize($order['productIds'])))."')";
      //$orderProducts = dbQuery('articles', DB_ARRAYS, array('fields'=>'articleId, title, price', 'where'=>$where2, 'indexKey'=>'articleId'));

      $productIds =  unserialize($order['productIds']);
      
      foreach($productIds as $productId=>$productInfo){
        $quantId = $productId;
        $orderProducts[$quantId] = $productInfo;
      }
      //print_r($quantitys);
    
      //$smarty->assign('quantitys', $quantitys);
      $smarty->assign('orderProducts', $orderProducts);
		}
		
		
	}elseif(!empty($action['save'])){
		
		
    //$order['createdBy'] = langdate(adjustTime($order['createdBy'], false, 'F j, Y H:i'));
    
		if(empty($errors)){
			
			if(empty($order['orderId'])){
				
				dbQuery('orders' ,DB_INSERT,array('values'=>$order));
				$messages['saved']=true;
				
			}else{
				
				if(dbQuery('orders',DB_UPDATE,array('where'=>"orderId='$order[orderId]'",'values'=>$order))){
					$messages['saved']=true;
				}else{
					$errors['not_saved']=true;
				}
			}
		}else{
			$smarty->assign('action',array('edit'=>true));
			$smarty->assign('order', $order);
			$noItems=true;
		}
		
	}elseif(!empty($action['deleteOrder'])){
		
		$where[] = "orderId='$order[orderId]'";

		if(dbQuery('orders', DB_DELETE, array('where'=>$where))){
			echo "removeElement($order[orderId], 'order');\r\n";
		} else {
			echo "writeStatus('".lang('orders:errors:3')."', 'aError');\r\n";
			echo "window.setTimeout(\"writeStatus('')\", 5000);\r\n";
		}
		exit;
	}
	if(empty($noItems)){
		
		if($page<1){
			$page=1;
			$smarty->assign('page', $page);
		}
		
		$itemsPerPage = 10;
		
		$orders = dbQuery('orders', DB_ARRAYS, array('start'=>($page-1)* $itemsPerPage,'limit'=>$itemsPerPage, 'order'=>'orderId DESC', 'indexKey'=>'orderId'));
		
		foreach($orders as $orderId=>$order){
			$orders[$orderId]['status']=lang('orders:statuses:'.$orders[$orderId]['status']);
			$orders[$orderId]['createdBy'] = langdate(adjustTime($order['createdBy'], false, 'd.m.Y H:i'));
		}
	
		$totalOrders = dbQuery('orders',DB_VALUE,array('fields'=>'COUNT(*)'));
		$pageNums = getPageNums($totalOrders, $page, $itemsPerPage, 0, 4, 4, 0);
		$smarty->assign('orders', $orders);
		$smarty->assign('pageNums', $pageNums);
	}
	
	$smarty->assign('statuses',lang('orders:statuses'));	
		
	if(!empty($errors))$smarty->assign('errors', $errors);
	if(!empty($messages))$smarty->assign('messages', $messages);
	$smarty->display('orders.tpl');


?>