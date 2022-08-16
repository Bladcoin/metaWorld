<?php
/******************************************************************************/
//                                                                            //
//                             Smarty plugin                                  //
//                            @package Smarty                                 //
//							 @subpackage plugins                              //
//                        http://life-style.uz/                               //
//                   produced by Life Style, life-style.uz                    //
//                                                                            //
/******************************************************************************/

function smarty_function_logo($params, &$smarty){
	global $config;
	
	//$assign	= fetch_getParam('assign', $params, 'logos');
	$logoName	= fetch_getParam('name', $params, NULL);
		$getUrl	= fetch_getParam('getUrl', $params, NULL);
	//$fields	= fetch_getParam('fields', $params, 'logoId, logoName, logoUrl, logoType, lang');
	
	if ($logoName) {
		$where[] = "logoName = '$logoName'";
	}

	$logo = dbQuery('logos', DB_ARRAY, array('fields'=>$fields, 'where'=>$where));
	
	if($getUrl){
		return $logo['logoUrl'];
	}

	//d($logos);
	
	$result = '<a href="' . SITE_URL . '"><img src="' . $logo['logoUrl'] . '" alt="' . $config['website_name'] . '"></a>';
	
	return $result;
}

		


?>