<?php
// require_once 'Menu.php';
/**
 * @param array $buildLang
 * @return bool
 */
function saveSerializations($buildLang = array())
{
	global $smarty, $SECTIONS, $TREE,  $allCurrency, $typeContents, $adminUser;
	buildSectionArrays($buildLang);
	// ---> Сортировка по sortOrder в $TREE[i]['subsections']
	try {
		$TREE = array_map(function ($item) {
			if( $item["subsections"] == null ) return $item;
			array_multisort(array_column($item['subsections'], 'sortOrder'), SORT_ASC, $item['subsections']);
			return $item;
		}, $TREE);
	}catch( Exception $error ) {
		return;
	}
	// <--- Сортировка по sortOrder в $TREE[i]['subsections']

	$smarty->assign('TREE', $TREE);
	$smarty->assign('SECTIONS', $SECTIONS);

	buildCurrencyArray();
	$smarty->assign('allCurrency', $allCurrency);

	typeContents();
	$smarty->assign('typeContents', $typeContents);


	$tmpSmarty = $smarty;
	$serializations['TREE'] = var_export($TREE, true);
	$serializations['SECTIONS'] = var_export($SECTIONS, true);
	//$serializations['allCurrency'] = var_export($allCurrency, true );
	$tmpSmarty->assign('serializations', $serializations);
	$tmpSmarty->default_modifiers = array();

	if (empty($buildLang)) {
		$siteRoot = SITE_ROOT;
	} else {
		$siteRoot = ($buildLang['isDefault'] ? GLOBAL_ROOT : GLOBAL_ROOT . '/' . $buildLang['codename']);
	}

	$fh = fopen($siteRoot . '/includes/serializations.inc.php', 'w');
	if ($fh) {
		fwrite($fh, $tmpSmarty->fetch(GLOBAL_ROOT . '/admin/templates/serializations.tpl', '', 'admin'));
		fclose($fh);
		return true;
	}
	return false;
}

typeContents();
$smarty->assign('typeContents', $typeContents);


// print_r($menus);

/**
 *
 */
function buildCurrencyArray()
{
	global $allCurrency;
	$allCurrency = dbQuery('currency', DB_ARRAYS);
}
