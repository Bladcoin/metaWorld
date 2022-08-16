<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ERROR);

define('LS_VERSION', '6.1.24');
define('GLOBAL_ROOT', realpath(dirname(__FILE__) . '/../'));
define('SITE_TRUE_URL', $_SERVER['HTTP_HOST']);
define('IS_HTTPS', !empty($_SERVER['HTTPS']));
define('PRE', '.dQUEtby7P35;k"5EhPB<j.;,9hqvs!(<"B]=#dBfhnyaN)v>8Z_bs%YJW/u~{w5:4B!s5F>');
define('LS_SERIAL', '+99890345-11-33');
define('PRODUCT_NAME', 'LS PANEL (https://www.life-style.uz/)');


/* загрузить все языки */
$LANGUAGES = include(GLOBAL_ROOT . '/includes/global-languages.inc.php');
/* определить язык */
if (isset($_GET['SITE_LANG']) && isset($LANGUAGES[$_GET['SITE_LANG']])) {
	define('SITE_LANG', $_GET['SITE_LANG']);
	define('SITE_LANG_PATH', '/' . SITE_LANG);
	define('SITE_LANG_PREFIX', SITE_LANG . '_');
	define('SITE_LANG_POSTFIX', '-' . SITE_LANG);
	define('SITE_ROOT', GLOBAL_ROOT . SITE_LANG_PATH);
} else {
	define('SITE_LANG', '');
	define('SITE_LANG_PATH', '');
	define('SITE_LANG_PREFIX', '');
	define('SITE_LANG_POSTFIX', '');
	define('SITE_ROOT', GLOBAL_ROOT);
}



if (IS_HTTPS) {
	define('GLOBAL_URL', 'https://' . SITE_TRUE_URL);
	define('GLOBAL_URI', '');
	define('SITE_URL', 'https://' . SITE_TRUE_URL . SITE_LANG_PATH);
	define('SITE_URI', '/' . SITE_LANG_PATH);
} else {
	define('GLOBAL_URL', 'http://' . SITE_TRUE_URL);
	define('GLOBAL_URI', '');
	define('SITE_URL', 'http://' . SITE_TRUE_URL . SITE_LANG_PATH);
	define('SITE_URI', '/' . SITE_LANG_PATH);
}

if (SITE_LANG != '' && $LANGUAGES[SITE_LANG]['isDefault'] == 1) {
	header('Location: ' . GLOBAL_URL);
	die('Moving to ' . GLOBAL_URL);
}

$gmNow = gmdate('Y-m-d H:i:s');
/* типы визитов */
$allVisitTypes[1]['name'] = 'Home';
$allVisitTypes[2]['name'] = 'Section';
$allVisitTypes[3]['name'] = 'Article';
$allVisitTypes[4]['name'] = 'Search';
$allVisitTypes[5]['name'] = 'AdClick';
$allVisitTypes[6]['name'] = 'Error';
//$allVisitTypes[7]['name'] = 'RSS';
$allVisitTypes[8]['name'] = 'Sitemap';

/* Сценарий время начала */
list($usec, $sec) = explode(' ', microtime());
$scriptStartTime = ((float)$usec + (float)$sec);

/* подключение компонентов */
require_once(GLOBAL_ROOT . '/includes/config.inc.php');
require_once(GLOBAL_ROOT . '/includes/functions.inc.php');
require_once(GLOBAL_ROOT . '/includes/mysql-functions.inc.php');
require_once(GLOBAL_ROOT . '/includes/smarty/SmartyBC.class.php');

/* Подключение to DB */
$MUSQLILINK = @mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);
if (mysqli_connect_errno()) {
	print "<html><head><title>HTTP/1.0 503 Service Unavailable</title><style> html, body {height : 100vh;width : 100%;overflow : hidden;margin: 0 auto;font-family: -apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Oxygen-Sans,Ubuntu,Cantarell,'Helvetica Neue',sans-serif;}.wrapper {height : 100%;width : 100%;padding: 0px;text-align: center;}.content {position:absolute; width:100%; top:50%;transform: translateY(-100%);}h3{color: #424242;font-weight: 400;}</style></head><body><div class='wrapper'><div class='content'><h3>Error 503 Service Unavailable</h3><p><b>Service temporary unavailable (database connection problem).</b><br>Our apologies for any inconvenience this may cause.<br>We appreciate your patience and invite you to return soon.<br />" . mysqli_connect_errno() . " : " . mysqli_connect_error() . "</p></div></div></body></html>";
	logThis('Database connection problem: ' . mysqli_connect_errno() . " : " . mysqli_connect_error());
	mysqli_close($MUSQLILINK);
}
mysqli_query($MUSQLILINK, "SET CHARACTER SET 'utf8'");

/* Вся таблица базы данных */
$tbl['admin_users']       = $tablePrefix . 'admin_users';
$tbl['admin_user_images'] = $tablePrefix . 'admin_user_images';
$tbl['admin_history'] 	  = $tablePrefix . 'admin_history';

$tbl['baskets'] 	  = $tablePrefix . 'baskets';

$tbl['orders'] 	  = $tablePrefix . 'orders';

$tbl['subscribe']     	  = $tablePrefix . 'subscribe';
$tbl['languages'] 		  = $tablePrefix . 'languages';
$tbl['banned_ips']    	  = $tablePrefix . 'banned_ips';
$tbl['customers'] 		  = $tablePrefix . 'customers';
$tbl['customer_images']   = $tablePrefix . 'customer_images';
$tbl['settings_social']   = $tablePrefix . 'settings_social';
$tbl['settings_maps'] 	  = $tablePrefix . 'settings_maps';
$tbl['settings_content']  = $tablePrefix . 'settings_content';

$tbl['logos']             = $tablePrefix . SITE_LANG_PREFIX . 'logos';
$tbl['banners']           = $tablePrefix . SITE_LANG_PREFIX . 'banners';

$tbl['sections'] 		  = $tablePrefix . SITE_LANG_PREFIX . 'sections';
$tbl['section_rights']    = $tablePrefix . SITE_LANG_PREFIX . 'section_rights';
$tbl['section_images']    = $tablePrefix . SITE_LANG_PREFIX . 'section_images';
$tbl['section_gallerys']  = $tablePrefix . SITE_LANG_PREFIX . 'section_gallerys';
$tbl['articles'] 		  = $tablePrefix . SITE_LANG_PREFIX . 'articles';
$tbl['article_images']    = $tablePrefix . SITE_LANG_PREFIX . 'article_images';
$tbl['article_gallerys']  = $tablePrefix . SITE_LANG_PREFIX . 'article_gallerys';
$tbl['article_visits']    = $tablePrefix . SITE_LANG_PREFIX . 'article_visits';
$tbl['sliders'] 		  = $tablePrefix . SITE_LANG_PREFIX . 'sliders';
$tbl['slider_images'] 	  = $tablePrefix . SITE_LANG_PREFIX . 'slider_images';
$tbl['comments'] 		  = $tablePrefix . SITE_LANG_PREFIX . 'comments';

$tbl['settings'] 		  = $tablePrefix . SITE_LANG_PREFIX . 'settings';
$tbl['currency'] 		  = $tablePrefix . SITE_LANG_PREFIX . 'currency';

/* Статистика таблица */
$tbl['stats_visitors']          = $tablePrefix . SITE_LANG_PREFIX . 'stats_visitors';
$tbl['stats_visits']            = $tablePrefix . SITE_LANG_PREFIX . 'stats_visits';
$tbl['stats_user_agents']       = $tablePrefix . SITE_LANG_PREFIX . 'stats_user_agents';
$tbl['stats_section_visits']    = $tablePrefix . SITE_LANG_PREFIX . 'stats_section_visits';
$tbl['stats_article_visits']    = $tablePrefix . SITE_LANG_PREFIX . 'stats_article_visits';
$tbl['stats_search_visits']     = $tablePrefix . SITE_LANG_PREFIX . 'stats_search_visits';
$tbl['stats_ad_clicks']         = $tablePrefix . SITE_LANG_PREFIX . 'stats_ad_clicks';
$tbl['stats_error_visits']      = $tablePrefix . SITE_LANG_PREFIX . 'stats_error_visits';
$tbl['stats_rss_visits']        = $tablePrefix . SITE_LANG_PREFIX . 'stats_rss_visits';


/* Статистика таблиц кэша */
$tbl['stats_cache_daily'] = $tablePrefix . SITE_LANG_PREFIX . 'stats_cache_daily';

/* Загрузка параметров системы */
$config  = getSettings();
$conf    = getSettingsContent();
$maps    = getSettingsMaps();

if (!empty($config['check_banned_ips'])) dieIfBanned($_SERVER['REMOTE_ADDR']); // проверка запрещенных IP-адресов
/* инициализации Smarty  */
$smarty = new SmartyBC;
$smarty->template_dir = GLOBAL_ROOT . '/themes/' . $config['theme'] . '/templates';
$smarty->cache_dir    = GLOBAL_ROOT . '/temp/smarty/cache';
$smarty->compile_dir  = GLOBAL_ROOT . '/temp/smarty/compile';
$smarty->compile_id   = 'main' . SITE_LANG_POSTFIX . '-' . $config['theme'];
$smarty->compile_check = true;
$smarty->force_compile = true;
// $smarty->debugging    = true;
// $smarty->registerPlugin('nocache', 'smarty_block_nocache', false); //* Кэш - предупреждения блок
/* определение пути до темы */
define('THEME_URL', (empty($THEME_URL) || IS_HTTPS) ? GLOBAL_URL . '/themes/' . $config['theme'] : $THEME_URL);
define('THEME_ROOT', (empty($THEME_ROOT) || IS_HTTPS) ? GLOBAL_ROOT . '/themes/' . $config['theme'] : $THEME_ROOT);

/* назначение основных переменных */
$smarty->assign('config', $config);
$smarty->assign('conf', $conf);
$smarty->assign('SITE_URL', SITE_URL);
$smarty->assign('SITE_URI', SITE_URI);
$smarty->assign('SITE_LANG', SITE_LANG);
$smarty->assign('THEME_URL', THEME_URL);
$smarty->assign('GLOBAL_URL', GLOBAL_URL);
$smarty->assign('GLOBAL_URI', GLOBAL_URI);
$smarty->assignByRef('LANGUAGES', $LANGUAGES);

$smarty->default_modifiers = array('escape'); // настройки Smarty
//$smarty->register_resource('rss', array('rss_get_template', 'rss_get_timestamp', 'rss_get_secure', 'rss_get_trusted')); //* registering resource "rss". rss:<b>{$var}</b>
require_once(SITE_ROOT . '/includes/serializations.inc.php');           // в том числе сериализации
header('Content-Type: text/html; charset=' . $config['charset']);       // кодировка
header('X-Powered-By: ' . PRODUCT_NAME . ' - ' . LS_SERIAL);                // Имя продукта
@ob_start('ob_gzhandler');                                      // сжатия GZIP

/* Информация о странице Расположение */
$LOCATION['URL']   = getSelfUrl();
$LOCATION['URI']   = preg_replace('~^(/.*?)/[^/]*$~i', '$1', $_SERVER['PHP_SELF']);
$LOCATION['PATH']  = preg_replace('~^(/.*?)/[^/]*$~i', '$1', $_SERVER['REQUEST_URI']);
$LOCATION['FILE']  = preg_replace('~^/.*?/([^/]*)$~i', '$1', $_SERVER['REQUEST_URI']);
$LOCATION['QUERY'] = $_SERVER['QUERY_STRING'];
$LOCATION['URLQ']  = getSelfUrl(true);

$smarty->assign('LOCATION', $LOCATION);
$smarty->assign('IS_HTTPS', IS_HTTPS);


if ($config['telegram_send'] == 1) {
	define('TELEGRAM_TOKEN', $config['telegram_token']);
	define('TELEGRAM_CHATID', $config['telegram_chat_id']);
}
if ($config['allow_recaptcha'] == 1) {
	define('PRIVATE_REY', $config['recaptcha_private_key']);
}



$CHARSET        = $config['charset'];
$CONFIG_SUBJECT = $config['smtp_subject'];
$SITENAME       = $config['website_name'];
$TOEMAIL        = $config['email'];
//$setfrom = $config['feedback_email'];

$transport_mail   = $config['mail_transport'];	// Через какую функцию будет отправляться почта mail() или  phpmailer
$host_server 	  = $config['smtp_server']; 	// Host
$port_server 	  = $config['smtp_port'];   	// Port
$user_server 	  = $config['smtp_user'];       // Username
$pass_server 	  = $config['smtp_pass'];       // Password
$secure_server 	  = $config['smtp_secure']; 		// SMTPSecure

if ($transport_mail == 'smtp') {

	require("PHPMailer/PHPMailer.php");
	require("PHPMailer/SMTP.php");
	require("PHPMailer/Exception.php");

	$mail = new PHPMailer\PHPMailer\PHPMailer();    // инициализируем класс
	$mail->CharSet = $CHARSET;				        // кодировка заголовков
	$mail->isSMTP(); 						        // указали, что работаем по протоколу SMTP
	//$mail->SMTPDebug = 2;					        // Если что-то не работает
	$mail->Host       = $host_server; 			    // хост
	$mail->SMTPAuth   = true; 				        // аутентификация включена
	$mail->Username   = $user_server; 		        // Ваш логин в Яндексе. Именно логин, без @yandex.ru
	$mail->Password   = $pass_server; 		        // Ваш пароль
	$mail->SMTPSecure = $secure_server;		        // Шифрование письма тип ssl или tls
	$mail->Port       = $port_server;
	$mail->addReplyTo( $TOEMAIL, 'Second World');
	$mail->setFrom( $TOEMAIL );
}

require_once(GLOBAL_ROOT . '/includes/overall.pub.inc.php');
