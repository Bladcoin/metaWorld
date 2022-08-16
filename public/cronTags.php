<?php
require_once('../includes/visitor.inc.php');
$where[] = "type_content='articles'";
$where[] = "tags!=''";
$articles = dbQuery('articles', DB_ARRAYS, array('fields'=>'tags','where'=>$where));
$sortAricles = [];
$mergedArticles = [];
foreach ($articles as $key => $value) {
	$exploded = explode(',',$value['tags']);
	array_push($sortAricles,$exploded);
}
foreach ($sortAricles as $key => $value) {
	$mergedArticles = array_merge($mergedArticles, $value);
}
$mergedArticles = array_count_values($mergedArticles);
arsort($mergedArticles);
$result = array_keys($mergedArticles);
$result = implode(',', $result);
dbQuery('settings', DB_UPDATE, array('values' => "value='$result'", 'where' => "codename='tagsBlog'"));
?>