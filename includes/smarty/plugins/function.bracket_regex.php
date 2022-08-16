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

function smarty_function_bracket_regex($params, &$smarty){

	$from    = fetch_getParam('from', $params, NULL);
	$strip_tags    = fetch_getParam('strip_tags', $params, NULL);
	
	if($strip_tags) {
		preg_match_all('/\[(.*?)](.*?)(?=\[.*?]|\z)/s', strip_tags($from), $regex);
	} else {
		preg_match_all('/<p>\[(.*?)]<\/p>(.*?)(?=<p>\[.*?]<\/p>|\z)/s', $from, $regex);
	}

	foreach ($regex[1] as $key => $item) {
		$result[$key]['code'] = trim($item);
		$result[$key]['content'] = trim($regex[2][$key]);
	}

	$smarty->assign('regex',$result);

	return null;
}
?>