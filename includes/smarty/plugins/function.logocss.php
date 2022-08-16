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

function smarty_function_logocss($params, &$smarty){
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
	
	$result = '<a href="'.SITE_URL.'"><div class="img" style="background-image: url(\''.$logo['logoUrl'].'\');"></div></a>';
	
	return $result;
}

		


?>