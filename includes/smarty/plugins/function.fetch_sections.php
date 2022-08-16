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

function smarty_function_fetch_sections($params, &$smarty){
	global $SECTIONS;

	$assign = fetch_getParam('assign', $params, 'sections');
	$fields = fetch_getParam('fields', $params, 'sectionId, parentId, name, alias, url, summary, content, images, section_icon, content_two, dop');
	$status = fetch_getParam('status', $params, 'visible');
	$toMain = fetch_getParam('toMain', $params, 0);
	$isFeatured = fetch_getParam('isFeatured', $params, NULL);
	$from   = fetch_getParam('from', $params, NULL);
	$skip   = fetch_getParam('skip', $params, NULL);
	$level  = (int) fetch_getParam('level', $params, 0);
	$type   = fetch_getParam('type', $params, '');
	$limit  = (int) fetch_getParam('limit', $params);
	$sections = fetch_getParam('sections', $params, NULL);
	$type_content = fetch_getParam('type_content', $params, NULL);
	$getContent = (bool) fetch_getParam('getContent', $params, false);
	
	$hasImage = fetch_getParam('hasImage', $params, NULL);

	if(empty($assign)){
		$smarty->_trigger_fatal_error('fetch_sections: "assign" must not be empty');
		return;
	}
    
	if (!is_null($sections)) {
    	//print_r($sections);
		// if "sections" is a list separated with comma
		$sectionIds = array();
		if (!is_array($sections)){
			$sections = explode(',', $sections);
			$sections = array_map('trim', $sections);
		}
		// replace all section codeNames with their sectionIds
		$sectionIds = $sections;
		foreach ($SECTIONS as $sectionId=>$section) {
			if (($key = array_search($section['dir'], $sectionIds)) || ($key = array_search($section['fileName'], $sectionIds)) || ($key = array_search($section['sectionId'], $sectionIds))) {
				$sectionIds[$key] = $section['sectionId'];
			}
		}
		foreach($sectionIds as $sectionId) $result[$sectionId] = array();
	}

	if (!is_null($from)){
		// find parentId
		if (is_numeric($from) && (($from == 0) || !empty($SECTIONS[$from]))) {
			$parentId = $from;
		} else {
			foreach ($SECTIONS as $sectionId=>$section) {
				if ($section['dir'] == $from) {
					$parentId = $sectionId;
					break;
				}
			}
		}
	}

	$total = 0;
	$result = array();
	foreach($SECTIONS as $sectionId=>$section){
		if (!empty($limit) && $total >= $limit) break;
		if (isset($sectionIds) && !in_array($section['sectionId'], $sectionIds)) continue;
		if (!empty($parentId) && $section['parentId'] != $parentId) continue;
		if (!empty($level) && $section['level'] != $level) continue;
		if (!empty($status) && $section['status'] != $status) continue;
		if (!empty($type_content) && $section['type_content'] != $type_content) continue;
		if (!empty($toMain) && $section['toMain'] != $toMain) continue;
		if (!empty($isFeatured) && $section['isFeatured'] != $isFeatured) continue;
		if (!empty($type) && $section['type'] != $type) continue;
		if (!empty($skip) && $section['sectionId'] == $skip) continue;
		$result[$sectionId] = $section;
		$total++;
	}
	// Сортировка по SortOrder
	array_multisort(array_column($result, 'sortOrder'), SORT_ASC, $result);

	if(!empty($result)){
		// remove empty elements from result
		foreach ($result as $sectionId=>$section) {
			if (empty($section)) unset($result[$sectionId]);
		}
	}
	
    // print_r($sections);
    
	if($getContent && !empty($result)){
		$where = 'sectionId IN ('.implode(',', array_keys($result)).')';
		$contents = dbQuery('sections', DB_ARRAYS, array('where'=>$where, 'indexKey'=>'sectionId', 'valueKey'=>'content', 'fields'=>$fields, 'order'=>'sortOrder DESC'));
		
		foreach($contents as $sectionId=>$content){
			$result[$sectionId]['content'] = $content;
		}
	}
	
	$sections = prepareSections($result);
    
    //print_r($sections);
    
	$smarty->assign($assign, $sections);
	

	return null;
}
?>