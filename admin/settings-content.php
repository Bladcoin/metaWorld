<?php
	include('../includes/admin.inc.php');
	if($adminUser['accessLevel'] != 'administrator' && $adminUser['accessLevel'] != 'developer') die(lang('general:accessIsDenied'));

	$action   			= getRequestVar('action');
	$fieldcontent 		= getRequestVar('fieldcontent', '', $noEscape = true);
	//$date     			= getRequestVar('date');

	if(!empty($action['save'])){
		
		if(empty($fieldcontent['article_title'])) $fieldcontent['article_title'] = 1;
		if(empty($fieldcontent['article_fileName'])) $fieldcontent['article_fileName'] = 1;
		if(empty($fieldcontent['article_section'])) $fieldcontent['article_section'] = 1;
		if(empty($fieldcontent['article_alias'])) $fieldcontent['article_alias'] = 1;
		if(empty($fieldcontent['article_images'])) $fieldcontent['article_images'] = 1;
		if(empty($fieldcontent['article_summary'])) $fieldcontent['article_summary'] = 1;
		if(empty($fieldcontent['article_content'])) $fieldcontent['article_content'] = 1;
		if(empty($fieldcontent['article_gallery'])) $fieldcontent['article_gallery'] = 0;
		if(empty($fieldcontent['article_featured'])) $fieldcontent['article_featured'] = 0;
		if(empty($fieldcontent['article_comments'])) $fieldcontent['article_comments'] = 0;
		
		if(empty($fieldcontent['tiding_title'])) $fieldcontent['tiding_title'] = 1;
		if(empty($fieldcontent['tiding_fileName'])) $fieldcontent['tiding_fileName'] = 1;
		if(empty($fieldcontent['tiding_section'])) $fieldcontent['tiding_section'] = 1;
		if(empty($fieldcontent['tiding_alias'])) $fieldcontent['tiding_alias'] = 0;
		if(empty($fieldcontent['tiding_images'])) $fieldcontent['tiding_images'] = 0;
		if(empty($fieldcontent['tiding_summary'])) $fieldcontent['tiding_summary'] = 0;
		if(empty($fieldcontent['tiding_content'])) $fieldcontent['tiding_content'] = 0;
		if(empty($fieldcontent['tiding_gallery'])) $fieldcontent['tiding_gallery'] = 0;
		if(empty($fieldcontent['tiding_featured'])) $fieldcontent['tiding_featured'] = 0;
		if(empty($fieldcontent['tiding_comments'])) $fieldcontent['tiding_comments'] = 0;
		
		if(empty($fieldcontent['gallery_title'])) $fieldcontent['gallery_title'] = 1;
		if(empty($fieldcontent['gallery_fileName'])) $fieldcontent['gallery_fileName'] = 1;
		if(empty($fieldcontent['gallery_section'])) $fieldcontent['gallery_section'] = 1;
		if(empty($fieldcontent['gallery_alias'])) $fieldcontent['gallery_alias'] = 1;
		if(empty($fieldcontent['gallery_images'])) $fieldcontent['gallery_images'] = 1;
		if(empty($fieldcontent['gallery_summary'])) $fieldcontent['gallery_summary'] = 0;
		if(empty($fieldcontent['gallery_content'])) $fieldcontent['gallery_content'] = 0;
		if(empty($fieldcontent['gallery_gallery'])) $fieldcontent['gallery_gallery'] = 1;
		if(empty($fieldcontent['gallery_featured'])) $fieldcontent['gallery_featured'] = 0;
		if(empty($fieldcontent['gallery_comments'])) $fieldcontent['gallery_comments'] = 0;
		
		if(empty($fieldcontent['product_title'])) $fieldcontent['product_title'] = 1;
		if(empty($fieldcontent['product_fileName'])) $fieldcontent['product_fileName'] = 1;
		if(empty($fieldcontent['product_section'])) $fieldcontent['product_section'] = 1;
		if(empty($fieldcontent['product_alias'])) $fieldcontent['product_alias'] = 1;
		if(empty($fieldcontent['product_articul'])) $fieldcontent['product_articul'] = 0;
		if(empty($fieldcontent['product_price'])) $fieldcontent['product_price'] = 0;
		if(empty($fieldcontent['product_sale'])) $fieldcontent['product_sale'] = 0;
		if(empty($fieldcontent['product_orderBy'])) $fieldcontent['product_orderBy'] = 0;
		if(empty($fieldcontent['product_images'])) $fieldcontent['product_images'] = 0;
		if(empty($fieldcontent['product_tags'])) $fieldcontent['product_tags'] = 0;
		if(empty($fieldcontent['product_featured'])) $fieldcontent['product_featured'] = 0;
		if(empty($fieldcontent['product_comments'])) $fieldcontent['product_comments'] = 0;
		
		if(empty($fieldcontent['section_name'])) $fieldcontent['section_name'] = 1;
		if(empty($fieldcontent['section_fileName'])) $fieldcontent['section_fileName'] = 1;
		if(empty($fieldcontent['section_alias'])) $fieldcontent['section_alias'] = 1;
		if(empty($fieldcontent['section_parent'])) $fieldcontent['section_parent'] = 1;
		if(empty($fieldcontent['section_images'])) $fieldcontent['section_images'] = 0;
		if(empty($fieldcontent['section_icon'])) $fieldcontent['section_icon'] = 0;
		
		if(empty($fieldcontent['slider_title'])) $fieldcontent['slider_title'] = 1;
		if(empty($fieldcontent['slider_fileName'])) $fieldcontent['slider_fileName'] = 1;
		if(empty($fieldcontent['slider_section'])) $fieldcontent['slider_section'] = 1;
		if(empty($fieldcontent['slider_alias'])) $fieldcontent['slider_alias'] = 0;
		if(empty($fieldcontent['slider_link'])) $fieldcontent['slider_link'] = 0;
		if(empty($fieldcontent['slider_icon'])) $fieldcontent['slider_icon'] = 0;
		if(empty($fieldcontent['slider_images'])) $fieldcontent['slider_images'] = 0;
		if(empty($fieldcontent['slider_summary'])) $fieldcontent['slider_summary'] = 0;
		if(empty($fieldcontent['slider_text'])) $fieldcontent['slider_text'] = 0;
		
		if(empty($fieldcontent['menu_subscribe'])) $fieldcontent['menu_subscribe'] = 0;
		if(empty($fieldcontent['menu_comments'])) $fieldcontent['menu_comments'] = 0;
		if(empty($fieldcontent['menu_banners'])) $fieldcontent['menu_banners'] = 0;
		if(empty($fieldcontent['menu_currency'])) $fieldcontent['menu_currency'] = 0;
		if(empty($fieldcontent['menu_site_users'])) $fieldcontent['menu_site_users'] = 0;
		
		foreach($fieldcontent as $name=>$value) if(!isset($conf[$name]) || $conf[$name] != $value) {
			
			$fieldcontent['field_name'] = mysqli_real_escape_string($MUSQLILINK, $name);
			$fieldcontent['field_value'] = mysqli_real_escape_string($MUSQLILINK, $value);
			
			
			dbQuery('settings_content', DB_REPLACE, array('values'=>$fieldcontent));
			
		}
		
		//d($field_content);
		
		$conf = getSettingsContent();
		$smarty->assign('conf', $conf);

		$messages['saved'] = true;

	/***** CUT FOR DEMO END *****/
	}


	if(!empty($errors)) $smarty->assign('errors', $errors);
	if(!empty($messages)) $smarty->assign('messages', $messages);
	
	$smarty->display('settings-content.tpl');
?>