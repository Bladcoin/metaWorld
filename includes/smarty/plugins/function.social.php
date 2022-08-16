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

function smarty_function_social($params, &$smarty){
	global $socials, $config, $MUSQLILINK;
	
	$assign	= fetch_getParam('assign', $params, 'socials');
	$fields	= fetch_getParam('fields', $params, 'social_id, name, url, fileName, icon, status, visible_text');
	$status  = fetch_getParam('status', $params, 'visible');
    
    $where = array();
	if(!empty($status)) $where[] = "status='".mysqli_real_escape_string($MUSQLILINK, $status)."'";
	
    $socials = dbQuery('settings_social', DB_ARRAYS, array('fields'=>$fields, 'where'=>$where));

	$result = '';

	foreach ($socials as $social){	
        
		if (!empty($social['icon'])){
    		if ($social['visible_text'] == '1'){
                $result .= '<li><a href="' .  $social['url'] . '" title="' . $social['name'] . '" target="_blank"> ' . $social['name'] . '  ' . $social['icon'] . '</a></li>';
            } else {
		        $result .= '<li><a href="' .  $social['url'] . '" title="' . $social['name'] . '" target="_blank"> ' . $social['icon'] . '</a></li>
		        ';
		    }
		} else {
			$result .= '<li><a href="' .  $social['url'] . '" title="' . $social['name'] . '" target="_blank"> ' . $social['name'] . '</a></li>';
		}

	}

	return $result;
	
}




?>