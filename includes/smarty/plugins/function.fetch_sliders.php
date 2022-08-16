<?php
/******************************************************************************/
//                                                                            //
//                             Smarty plugin                                  //
//                            @package Smarty                                 //
//							             @subpackage plugins                              //
//                        http://life-style.uz/                               //
//                   produced by Life Style, life-style.uz                    //
//                                                                            //
/******************************************************************************/

function smarty_function_fetch_sliders($params, &$smarty){
	global $SECTIONS, $gmNow, $fetchedSliders, $MUSQLILINK;
	
	$assign        = fetch_getParam('assign', $params, 'sliders');
	$fields        = fetch_getParam('fields', $params, 'sliderId, publishedOn, title, alias, links, text, url, summary');
	$status        = fetch_getParam('status', $params, 'visible');
	$limit         = (int) fetch_getParam('limit', $params);
	$hasImage      = fetch_getParam('hasImage', $params, NULL);
	$query         = fetch_getParam('query', $params, NULL);
	$match         = fetch_getParam('match', $params, 'any');
	$order         = fetch_getParam('order', $params, NULL);
	$orderBy       = fetch_getParam('orderBy', $params, $order);
	$section       = fetch_getParam('section', $params);
	$noSubsections = (boolean) fetch_getParam('noSubsections', $params, false);
	
	if(empty($assign)){
		$smarty->_trigger_fatal_error('fetch_sliders: "assign" must not be empty');
		return;
	}

	/* conditions */
	$where = array();
	$where[] = "publishedOn <= '$gmNow'";
	if(!empty($status)) $where[] = "status='".mysqli_real_escape_string($MUSQLILINK, $status)."'";
	if(!is_null($hasImage)) $where[] = 'hasImage = '.((boolean) $hasImage ? 1 : 0);
	if(is_null($orderBy)) $orderBy = (is_null($query) ? 'publishedOn DESC' : '');


	if(!is_null($query) && empty($query)){
		$sliders = array();
	} else {
		$sliders = dbQuery('sliders', DB_ARRAYS, array('fields'=>$fields, 'order'=>$orderBy, 'where'=>$where));
		$sliders = prepareSliders($sliders);
	}
	
	$smarty->assign($assign, $sliders);

	/* saving fetched sliders for SKIP ability */
	if(empty($fetchedSliders[$assign])) $fetchedSliders[$assign] = array();
	if(!empty($sliders)) foreach($sliders as $slider) $fetchedSliders[$assign][] = $slider['sliderId'];

}
?>