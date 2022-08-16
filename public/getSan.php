<?php
	require_once('../includes/visitor.inc.php');
	
	global $config, $tbl;
	
	$parentId = (int) getRequestVar('parentId');

	if(empty($parentId)){
		$smarty->display('error-404.tpl');
	} else {
		$result = dbQuery('sections', DB_ARRAYS, array('fields'=>'name,sectionId','where'=>"parentId='$parentId' AND type_content='sansng'"));
		array_unshift($result , ['name'=>'Выберите','sectionId'=>'']);
		$result = json_encode($result);
		echo($result);
	}
?>