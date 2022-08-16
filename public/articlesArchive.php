<?php 
require_once('../includes/visitor.inc.php');

//$from = '2012-11-15'; // промежуток времени c 15.11 до 24.12
//$to = '2012-12-24';
//$where[] = "publishedOn >= '$from' AND publishedOn <= '$to'";
//$where[] = 'publishedOn <= DATE_SUB(NOW(), INTERVAL 1 MONTH)';
$where[] = "type_content='articles'";
$where[] = "status='visible'";

$articles = dbQuery('articles', DB_ARRAYS, array('fields'=>'publishedOn','where'=>$where));

foreach ($articles as $key => $value) {
	$result[date('Y',strtotime($value['publishedOn']))][]	= date('m',strtotime($value['publishedOn']));
}
foreach ($result as $key => $value) {
	$result[$key] = array_count_values(($result[$key]));
	krsort($result[$key]);
}
krsort($result);
$this->assign('articlesArchive',$result);

?>