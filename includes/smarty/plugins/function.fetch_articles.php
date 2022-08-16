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

function smarty_function_fetch_articles($params, &$smarty){
	global $SECTIONS, $gmNow, $fetchedArticles, $config, $MUSQLILINK;
	
	$assign        = fetch_getParam('assign', $params, 'articles');
	$fields        = fetch_getParam('fields', $params, 'fileName, articleId, sectionId, publishedOn, title, alias, url, summary, summary2, content, isFeatured, orderBy, price, discount, discountprice, type_content, articul, avail, colors, kpp, dvigatel, god, tags, privod, fari, diski, klimat, multimedia, obivka, obivka_color, rashod, oil');
	$status        = fetch_getParam('status', $params, 'visible');
	//$productstatus = fetch_getParam('productstatus', $params, 'visible');
	$limit         = (int) fetch_getParam('limit', $params);
	$perPage       = (int) fetch_getParam('perPage', $params, $limit);
	$isFeatured    = fetch_getParam('isFeatured', $params, NULL);
	$discountPrice    = fetch_getParam('discountPrice', $params, NULL);
	$hasImage      = fetch_getParam('hasImage', $params, NULL);
	$query         = fetch_getParam('query', $params, NULL);
	if ($query == '') {
		$query = NULL;
	}
	$match         = fetch_getParam('match', $params, 'any');
	$order         = fetch_getParam('order', $params, NULL);
	$tag         = fetch_getParam('tag', $params, NULL);
	$colors         = fetch_getParam('colors', $params, NULL);
	$orderBy       = fetch_getParam('orderBy', $params, $order);
	$section       = fetch_getParam('section', $params);
	$type_content  = fetch_getParam('type_content', $params);
	$page          = (int) fetch_getParam('page', $params);
	$skip          = fetch_getParam('skip', $params, NULL);

	$whereParam          = fetch_getParam('where', $params, NULL);

	$noSubsections = (boolean) fetch_getParam('noSubsections', $params, false);
	
	$material          = fetch_getParam('material', $params, NULL);
	
	$kpp          = fetch_getParam('kpp', $params, NULL);
	$oil          = fetch_getParam('oil', $params, NULL);
	$kuzov          = fetch_getParam('kuzov', $params, NULL);
	$privod          = fetch_getParam('privod', $params, NULL);
	$fari          = fetch_getParam('fari', $params, NULL);
	$diski          = fetch_getParam('diski', $params, NULL);
	$colors          = fetch_getParam('colors', $params, NULL);
	$klimat          = fetch_getParam('klimat', $params, NULL);
	$multimedia          = fetch_getParam('multimedia', $params, NULL);
	$obivka          = fetch_getParam('obivka', $params, NULL);
	$obivka_color          = fetch_getParam('obivka_color', $params, NULL);


	$label    	   = fetch_getParam('label', $params);
	$atrtable      = fetch_getParam('atrtable', $params);
	$min_price 		= (int) fetch_getParam('min_price', $params);
	$max_price 		= (int) fetch_getParam('max_price', $params);
	
	$product_labels =  getRequestVar('product_labels');
	
	$assignPagination = fetch_getParam('assignPagination', $params);
	$path             = fetch_getParam('path', $params);
	$seFriendly       = (boolean) fetch_getParam('seFriendly', $params);
	$pnFirst          = (int) fetch_getParam('pnFirst', $params, 0);
	$pnBefore         = (int) fetch_getParam('pnBefore', $params, 4);
	$pnAfter          = (int) fetch_getParam('pnAfter', $params, 4);
	$pnLast           = (int) fetch_getParam('pnLast', $params, 0);

	$letter          = fetch_getParam('letter', $params, NULL);
	
	if(empty($assign)){
		$smarty->_trigger_fatal_error('fetch_articles: "assign" must not be empty');
		return;
	}
	
	if(empty($path)) $path = array();

	/* conditions */
	$where = array();
	$where[] = "publishedOn <= '$gmNow'";
	
	if(!empty($status)) $where[] 		= "status='".mysqli_real_escape_string($MUSQLILINK, $status)."'";
	if(!empty($type_content)) $where[] 	= "type_content='".mysqli_real_escape_string($MUSQLILINK, $type_content)."'";
	if(!is_null($isFeatured)) $where[] 	= 'isFeatured = '.((boolean) $isFeatured ? 1 : 0);

	if(!is_null($whereParam)) $where[] 	= $whereParam;
	if ($discountPrice == 'yes') {
		$where[] 	= "discount != ''";
	} elseif($discountPrice == 'no'){
		$where[] 	= "discount IS NULL OR discount = ''";
	}


	if(!is_null($hasImage)) $where[] 	= 'hasImage = '.((boolean) $hasImage ? 1 : 0);
	if(is_null($orderBy)) $orderBy 		= (is_null($query) ? 'publishedOn DESC' : '');

	if($kpp && !is_null($kpp)) $where[] 		= "kpp = '$kpp'";
	if($oil && !is_null($oil)) $where[] 		= "oil = '$oil'";
	if($kuzov && !is_null($kuzov)) $where[] 		= "kuzov = '$kuzov'";
	if($privod && !is_null($privod)) $where[] 		= "privod = '$privod'";
	if($fari && !is_null($fari)) $where[] 		= "fari = '$fari'";
	if($diski && !is_null($diski)) $where[] 		= "diski = '$diski'";
	if($colors && !is_null($colors)) $where[] 		= "colors = '$colors'";
	if($klimat && !is_null($klimat)) $where[] 		= "klimat = '$klimat'";
	if($multimedia && !is_null($multimedia)) $where[] 		= "multimedia = '$multimedia'";
	if($obivka && !is_null($obivka)) $where[] 		= "obivka = '$obivka'";
	if($obivka_color && !is_null($obivka_color)) $where[] 		= "obivka_color = '$obivka_color'";

	if($tag && !is_null($tag)) {
		if(is_array($tag)){
			foreach ($tag as $key => $value) {
				$where[] 	= "tags = '$value' or tags LIKE '$value,%' or tags LIKE '%$value,%' or tags LIKE '%,$value'";
			}
		} else {
			$where[] 	= "tags = '$tag' or tags LIKE '$tag,%' or tags LIKE '%$tag,%' or tags LIKE '%,$tag'";
		}
	}

	if (isset($letter)) {
	
		function rus2translit($string) {
		    $converter = array(
		        'а' => 'a',   'б' => 'b',   'в' => 'v',
		        'г' => 'g',   'д' => 'd',   'е' => 'e',
		        'ё' => 'e',   'ж' => 'zh',  'з' => 'z',
		        'и' => 'i',   'й' => 'y',   'к' => 'k',
		        'л' => 'l',   'м' => 'm',   'н' => 'n',
		        'о' => 'o',   'п' => 'p',   'р' => 'r',
		        'с' => 's',   'т' => 't',   'у' => 'u',
		        'ф' => 'f',   'х' => 'h',   'ц' => 'c',
		        'ч' => 'ch',  'ш' => 'sh',  'щ' => 'sch',
		        'ь' => '\'',  'ы' => 'y',   'ъ' => '\'',
		        'э' => 'e',   'ю' => 'yu',  'я' => 'ya',

		        'А' => 'A',   'Б' => 'B',   'В' => 'V',
		        'Г' => 'G',   'Д' => 'D',   'Е' => 'E',
		        'Ё' => 'E',   'Ж' => 'Zh',  'З' => 'Z',
		        'И' => 'I',   'Й' => 'Y',   'К' => 'K',
		        'Л' => 'L',   'М' => 'M',   'Н' => 'N',
		        'О' => 'O',   'П' => 'P',   'Р' => 'R',
		        'С' => 'S',   'Т' => 'T',   'У' => 'U',
		        'Ф' => 'F',   'Х' => 'H',   'Ц' => 'C',
		        'Ч' => 'Ch',  'Ш' => 'Sh',  'Щ' => 'Sch',
		        'Ь' => '\'',  'Ы' => 'Y',   'Ъ' => '\'',
		        'Э' => 'E',   'Ю' => 'Yu',  'Я' => 'Ya',
		    );
		    return strtr($string, $converter);
		}
}

	if($letter && !is_null($letter)) {
		$where[] 	= "title LIKE '$letter%' or title LIKE '".rus2translit($letter)."%'";
	}
	
	if(!is_null($material)){
		$material = mysqli_real_escape_string($MUSQLILINK, $material
		);
		$where[] 	= "material = '$material' or material LIKE '$material,%' or material LIKE '%$material,%' or material LIKE '%,$material' or material LIKE '%, $material'";
	}

	if(!is_null($colors) && !empty($colors) && is_array($colors)){
		$numItems = count($colors);
		$i = 0;
		foreach ($colors as $key => $color) {
			if(++$i == $numItems){
				$whereColor .= "tags = '$color' or tags LIKE '$color,%' or tags LIKE '%$color,%' or tags LIKE '%,$color'";
			} else {
				$whereColor .= "tags = '$color' or tags LIKE '$color,%' or tags LIKE '%$color,%' or tags LIKE '%,$color' OR ";
			}
		}
		$where[] = $whereColor;
	}
	
	if(!empty($label)) $where[] 	    = "label='".mysqli_real_escape_string($MUSQLILINK, $label)."'";
	
	
	if(!empty($min_price)) $where[] = "discountprice>=".mysql_real_escape_string($min_price);
	if(!empty($max_price)) $where[] = "discountprice<=".mysql_real_escape_string($max_price);
	
	
	if(!is_null($query) && is_array($path)) $path[] = "query=".urlencode($query);

	/* query conditions */
	fetch_articles_addQueryConditions($query, $match, $where, $fields, $orderBy);

	/* add section conditions */
	fetch_articles_addSectionConditions($section, $noSubsections, $where);

	/* skipping articles */
	fetch_articles_addSkipConditions($skip, $where);

	/* checking article fields */
	fetch_articles_filterFields($fields);
	
	/* calculate article popularity article fields */
	fetch_articles_calculatePopularity($orderBy);
  
	if($page < 1) $page = 1;
	if($perPage < 1) $perPage = $config['cont_section'];

	if(!is_null($query) && empty($query)){
		$articles = array();
	} else {
		$articles = dbQuery('articles', DB_ARRAYS, array('fields'=>$fields, 'order'=>$orderBy, 'where'=>$where, 'start'=>($page-1)*$perPage, 'limit'=>$perPage));
		$articles = prepareArticles($articles);
	}

	$smarty->assign($assign, $articles);

	/* saving fetched articles for SKIP ability */
	if(empty($fetchedArticles[$assign])) $fetchedArticles[$assign] = array();
	if(!empty($articles)) foreach($articles as $article) $fetchedArticles[$assign][] = $article['articleId'];
	
	if(!empty($assignPagination)){
		/* page numbering */
		$total = dbQuery('articles', DB_VALUE, array('fields'=>'COUNT(*)', 'where'=>$where));
		if(is_array($path)){
			$path = SITE_URL.'/'.basename($_SERVER['PHP_SELF']).'?'.(!empty($path) ? implode('&', $path).'&' : '');
			$seFriendly = false;
		}
		$pagination = getPageNums($total, $page, $perPage, $pnFirst, $pnBefore, $pnAfter, $pnLast, $path, $seFriendly);
		$smarty->assign($assignPagination, $pagination);
	}
	
	return null;
}
?>