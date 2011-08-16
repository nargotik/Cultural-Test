<?php 
/*
 * NarG aka Daniel Torres (daniel@inovmais.com)
 * Initialization file of site
 */

error_reporting(E_ALL ^ E_NOTICE);												/*Development*/
//error_reporting(0);
session_cache_limiter( FALSE ); 
session_start();


define('STARTED',true);
require("site_settings.php");													/*Load configuration file*/

$link = mysql_connect($mysql_host,$mysql_user,$mysql_pass);						/*Connects to database*/			
if (!$link) die('Could not connect: ' . mysql_error()); 						/*die if couldn't connect*/
mysql_set_charset('utf8',$link); 
mysql_select_db($mysql_db);														/*select database*/	


unset($current_user);$current_user=null;										/*Reset of critical vars, so there is less chances to pass then by outside*/
unset($is_admin);$is_admin=null;
if (isset($_GET['slug'])) $slug = mysql_real_escape_string($_GET['slug']);		/*Escape slugs*/

// Get url data over slashes
$url_data = explode("/",$_GET['q']);
if(strlen($url_data[0])==2 &&  in_array($url_data[0], $languages)) {			/*If first item has 2 chars can be a language*/
	$_GET['lg'] = $url_data[0];													/*language to var*/
	$request_slug = $url_data[1];
	$request_sub_slug = $url_data[2];
} else if(strlen($url_data[0])>2) {
	$request_slug = $url_data[0];
	$request_sub_slug = $url_data[1];
}

require("site_functions.php");													/*File with site functions*/


$_GET=cleanInput($_GET);														/*Cleans all _GET*/


require('libs/Smarty.class.php');												/*Initializes smarty engine*/
$smarty = new Smarty();
$smarty->debugging = true;

$smarty->caching = 1;
$smarty->cache_modified_check = true;

$smarty->template_dir = dirname(__FILE__)."/template/";							/*Directories of smarty*/
$smarty->compile_dir = dirname(__FILE__)."/template/compile/";
$smarty->cache_dir = dirname(__FILE__)."/cache/";


if (in_array($_GET["lg"],$languages)){
	$lg = $_GET["lg"];															/*Verify if selected language is in array*/
	$smarty->assign('lg_url', '/'.$lg.'');										/*Set template lg url ex. www.example.com/lg*/
} else {																		/*Else*/	
	$lg = $_GET["lg"];	
	$lg = $languages[0];														/*select first language as default language*/
	$smarty->assign('lg_url', '');												/*Set template lg url */
}
$smarty->assign('current_url',$_SERVER['REQUEST_URI']);
$smarty->assign('lg', $lg);														/*Set template lg var*/

/*LOGIN SYSTEM*/
if (isset($_POST['login_user']) && isset($_POST['login_pass'])) {				/*If there is any attempt of login verifies login*/
	$logged = login(cleanQuery($_POST['login_user']),cleanQuery($_POST['login_pass']));	/*Do the login, updating user table*/
	if ($logged==1) $_SESSION['logged']=1;										/*If logged set session as logged*/
	$smarty->assign('login_try', 1); 											/*To be used by template system to check if there is any login atempt*/
}

if (isset($_SESSION['logged']))													/*If logged verify login ip and session*/
if ($_SESSION['logged']==1) {
	$user = verifica_login();													/*And get current user to var*/
	if ($user) $current_user = $user;
	else $_SESSION['logged']=0;													/*Else logoff automatic*/
}

if ($current_user) $is_admin = is_admin($current_user);							/*Set $is_admin if user is administrator*/

$smarty->assign('current_user', $current_user);									/*Set template var of username*/
$smarty->assign('is_admin', $is_admin);											/*Set template var of is_admin*/

$smarty->assign("sess",session_id());
$smarty->assign("sess_name",ini_get('session.name'));

$lgg['linguas'] = $languages;					/*Assigns languages to lgg to put on template var*/
$lgg['linguas_desc'] = $languages_desc;
$smarty->assign($lgg);
$smarty->assign('site_url',$site_url);


?>