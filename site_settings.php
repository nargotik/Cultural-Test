<?
if (!defined('STARTED')) exit;
/*
 * NarG aka Daniel Torres (daniel@inovmais.com)
 * Configuration file of site
 */

/*
 *
 * Database Configuration
 *
 */
$mysql_user =	"root";				/*username of mySQL*/
$mysql_db =		"teste_smarty";			/*Database name*/
$mysql_pass = 	"root";				/*password of MYSQL user*/
$mysql_host = 	"localhost";		/*host of mysql server usualy localhost*/


$site_name = 'Cultural Au Pair';
/*
 *
 * Misc configurations
 *
 */

$site_url = "http://test_smarty.com";
$chmod_upload = 0755;

$languages = array('en','it');						/* first item is default language of site */
$languages_desc = array('English','Italian');		/* Description of languages */

/*Keys of capcha */

define ('RECAPTCHA_PUBLIC_KEY', '');
define ('RECAPTCHA_PRIVATE_KEY', '');
?>
