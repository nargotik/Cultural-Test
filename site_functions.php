<?php 
/* Daniel Torres
 * Functions list
 */
function cleanQuery($string) {		/*Cleans a var of SQL injection problems*/
  if(get_magic_quotes_gpc())  		/* prevents duplicate backslashes */
    $string = stripslashes($string);
  if (phpversion() >= '4.3.0')
    $string = mysql_real_escape_string($string);
  else
    $string = mysql_escape_string($string);
  return $string;
}

function login($user,$password) { 	/*Login User*/
	$sessionid = session_id();
	$userip = $_SERVER['REMOTE_ADDR'];
	$user = cleanQuery($user);$password = cleanQuery($password);
	$sql = "
	UPDATE users	SET 
	last_session='$sessionid', last_seen=NOW(), last_ip='$userip'
	WHERE LOWER(username)=LOWER('$user') AND `password`=MD5('$password') LIMIT 1";
	$result = mysql_query($sql);
	$affected = mysql_affected_rows();
	mysql_query("COMMIT");
	return $affected;
}

function loggout() { 				/*Logout user*/
	$sessionid = session_id();
	$sql = "
	UPDATE users	SET 
	last_session=''
	WHERE last_session='$sessionid'";
	//echo $sql;
	$result = mysql_query($sql);
	$affected = mysql_affected_rows();
	mysql_query("COMMIT");
	return $affected;
}

function verifica_login() {			/*Verifies login by session_id and ip*/
	$sessionid = session_id();
	$userip = $_SERVER['REMOTE_ADDR'];
	$sql = "
	SELECT username 
	FROM users 
	WHERE 
		last_session='$sessionid' 
		AND last_ip='$userip' 
		AND last_seen BETWEEN NOW()- INTERVAL 2 HOUR AND NOW() 
	";
	$result = mysql_query($sql);
	if (!$result) echo mysql_error();
	$row = mysql_fetch_assoc($result);
	if (is_array($row)) {
			$sql = "
			UPDATE users	SET 
			last_seen=NOW()
			WHERE last_session='$sessionid' AND last_ip='$userip' LIMIT 1";
		if ($row['username']) $result = mysql_query($sql);
		if ($row['username']) mysql_query("UPDATE users	SET last_seen=NOW() WHERE username='{$row['username']}'");
		return $row['username'];
	}
}

function is_admin($username) {	/*check user permissions*/
	$sql = "SELECT priv FROM users WHERE username = '$username'";
	$result = mysql_query($sql);
	if (!$result) echo mysql_error();
	$row = mysql_fetch_assoc($result);
	if (is_array($row)) {
		return $row['priv'] ;
	}
}

function user_slug($username,$lg) {	/*returns user slug*/
	$sql = "SELECT slug FROM slugs WHERE id = '$username' AND module='blogs'";
	$result = mysql_query($sql);
	if (!$result) echo mysql_error();
	$row = mysql_fetch_assoc($result);
	if (is_array($row)) {
		return $row['slug'] ;
	}
}

function poster($id) {	/*check post poster ;D*/
	$id = intval($id);
	$sql = "SELECT user FROM posts WHERE id = '$id'";
	$result = mysql_query($sql);
	if (!$result) echo mysql_error();
	$row = mysql_fetch_assoc($result);
	if (is_array($row)) {
		return $row['user'] ;
	}
}

function user_details($user) {		/*Returns details of an user*/
	$user = cleanQuery($user);
	$sql = "SELECT * FROM users 
	WHERE username='$user'";
	//echo $sql;
	$result = mysql_query($sql);
	if (!$result) echo mysql_error();
	$row = mysql_fetch_assoc($result);
	if (is_array($row)) {
		return $row;
	} else {
		return;
	}
}


function check_online($user) {			/*Verifies if user is logged in*/
	$user = prepData($user);
	$sql = "
	SELECT username 
	FROM users 
	WHERE 
		last_session<>'' 
		AND last_ip<>'' 
		AND id='$user'
		AND last_seen BETWEEN NOW()- INTERVAL 2 HOUR AND NOW() 
		AND validado=1
	";
	//echo $sql;
	$result = mysql_query($sql);
	if (!$result) echo mysql_error();
	$row = mysql_fetch_assoc($result);
	if (is_array($row)) {
		return 1;
	} else {
		return 0;
	}

	
}

function slug_exists($slug,$lg) {
	$sql = "SELECT slug FROM slugs WHERE slug='$slug' AND lg='$lg'";
	$result = mysql_query($sql);
	if (!$result) echo mysql_error();
	$row = mysql_fetch_assoc($result);
	if (is_array($row))
		if ($row['slug'] == $slug) {
			return true;
		} else {
			return false;
		}
}
function slug_exists2($slug,$slug2,$lg) {
	$sql = "SELECT slug FROM slugs WHERE sub_slug='$slug2' AND slug='$slug' AND lg='$lg'";
	$result = mysql_query($sql);
	if (!$result) echo mysql_error();
	$row = mysql_fetch_assoc($result);
	if (is_array($row))
		if ($row['slug'] == $slug) {
			return true;
		} else {
			return false;
		}
}

function slug_gen($url) {
	// everything to lower and no spaces begin or end
	$url = replace_accents($url);
	$url = strtolower(trim($url));
 
	//replace accent characters, depends your language is needed
	//$url=replace_accents($url);
 
	// decode html maybe needed if there's html I normally don't use this
	//$url = html_entity_decode($url,ENT_QUOTES,'UTF8');
 
	// adding - for spaces and union characters
	$find = array(' ', '&', '\r\n', '\n', '+',',');
	$url = str_replace ($find, '-', $url);
 
	//delete and replace rest of special chars
	$find = array('/[^a-z0-9\-]/', '/[\-]+/', '/<[^>]*>/');
	$repl = array('', '-', '');
	$url = preg_replace ($find, $repl, $url);
 
	//return the friendly url
	return $url;
}
function apaga_imagens($img_array,$dir) {
	foreach ($img_array as $value => $key)
		foreach ($img_array[$value] as $value1 => $key1) {
			$img = $img_array[$value][$value1]['img'];
			//echo dirname(__FILE__)."/media/".$dir."/".$img."\n";
			@unlink(dirname(__FILE__)."/media/".$dir."/".$img);
		}
	//exit;
}


function replace_accents($var){ //replace for accents catalan spanish and more
    //acccents 
    $find = array("À","Á","Â","Ã","Ä","Å","à","á","â","ã","ä","å");
    $var = str_replace ($find, 'a', $var);
    
    $find = array("È","É","Ê","Ë","è","é","ê","ë");
    $var = str_replace ($find, 'e', $var);
    
    $find = array("Ì","Í","Î","Ï","ì","í","î","ï");
    $var = str_replace ($find, 'i', $var);
    
    $find = array("Ò","Ó","Ô","Õ","Ö","Ø","ò","ó","ô","õ","ö","ø");
    $var = str_replace ($find, 'o', $var);
    
    $find = array("Ù","Ú","Û","Ü","ù","ú","û","ü");
    $var = str_replace ($find, 'u', $var);
    
    $find = array("Ñ","ñ");
    $var = str_replace ($find, 'n', $var);
    
    $find = array("Ç","ç");
    $var = str_replace ($find, 'c', $var);
    
    $var = str_replace ('ÿ', 'y', $var);
    
    //$var = @ereg_replace("(À|Á|Â|Ã|Ä|Å|à|á|â|ã|ä|å)","a",$var); 
    //$var = @ereg_replace("(È|É|Ê|Ë|è|é|ê|ë)","e",$var); 
    //$var = @ereg_replace("(Ì|Í|Î|Ï|ì|í|î|ï)","i",$var); 
    //$var = @ereg_replace("(Ò|Ó|Ô|Õ|Ö|Ø|ò|ó|ô|õ|ö|ø)","o",$var); 
    //$var = @ereg_replace("(Ù|Ú|Û|Ü|ù|ú|û|ü)","u",$var); 
    //ntilde 
    //$var = @ereg_replace("(Ñ|ñ)","n",$var); 
    //cedilla
    //$var = @ereg_replace("(Ç|ç)","c",$var); 
    //$var = @ereg_replace("ÿ","y",$var); 
    return $var; 
}

function cleanInput($input) {						/*Remove html code*/
 
		$search = array(
		    '@<script[^>]*?>.*?</script>@si',   // Strip out javascript
		    '@<[\/\!]*?[^<>]*?>@si',            // Strip out HTML tags
		    '@<style[^>]*?>.*?</style>@siU',    // Strip style tags properly
		    '@<![\s\S]*?--[ \t\n\r]*>@'         // Strip multi-line comments
		);
 
    $output = @preg_replace($search, '', $input);
    return $output;
}

function prepData($var) {

  if (get_magic_quotes_gpc()) {
    $var = stripslashes($var);
  }
return mysql_real_escape_string($var);
}

function funct_404() {
	/*TODO*/
	echo "404 error";exit;
}

if (!function_exists('getallheaders'))
{
    function getallheaders()
    {
       foreach ($_SERVER as $name => $value)
       {
           if (substr($name, 0, 5) == 'HTTP_')
           {
               $headers[str_replace(' ', '-', ucwords(strtolower(str_replace('_', ' ', substr($name, 5)))))] = $value;
           }
       }
       return $headers;
    }
}

//NNNIIIinnnjaaa::
//array of files without directories... optionally filtered by extension
function file_list($d,$x){
       foreach(array_diff(scandir($d),array('.','..')) as $f)if(is_file($d.'/'.$f)&&(($x)?ereg($x.'$',$f):1))$l[]=$f;
       return $l;
} 


$ar_countries = array(
		'SPACER'=>'NONE',
		'AF'=>'AFGHANISTAN',
		'AL'=>'ALBANIA',
		'DZ'=>'ALGERIA',
		'AS'=>'AMERICAN SAMOA',
		'AD'=>'ANDORRA',
		'AO'=>'ANGOLA',
		'AI'=>'ANGUILLA',
		'AQ'=>'ANTARCTICA',
		'AG'=>'ANTIGUA AND BARBUDA',
		'AR'=>'ARGENTINA',
		'AM'=>'ARMENIA',
		'AW'=>'ARUBA',
		'AU'=>'AUSTRALIA',
		'AT'=>'AUSTRIA',
		'AZ'=>'AZERBAIJAN',
		'BS'=>'BAHAMAS',
		'BH'=>'BAHRAIN',
		'BD'=>'BANGLADESH',
		'BB'=>'BARBADOS',
		'BY'=>'BELARUS',
		'BE'=>'BELGIUM',
		'BZ'=>'BELIZE',
		'BJ'=>'BENIN',
		'BM'=>'BERMUDA',
		'BT'=>'BHUTAN',
		'BO'=>'BOLIVIA',
		'BA'=>'BOSNIA AND HERZEGOVINA',
		'BW'=>'BOTSWANA',
		'BV'=>'BOUVET ISLAND',
		'BR'=>'BRAZIL',
		'IO'=>'BRITISH INDIAN OCEAN TERRITORY',
		'BN'=>'BRUNEI DARUSSALAM',
		'BG'=>'BULGARIA',
		'BF'=>'BURKINA FASO',
		'BI'=>'BURUNDI',
		'KH'=>'CAMBODIA',
		'CM'=>'CAMEROON',
		'CA'=>'CANADA',
		'CV'=>'CAPE VERDE',
		'KY'=>'CAYMAN ISLANDS',
		'CF'=>'CENTRAL AFRICAN REPUBLIC',
		'TD'=>'CHAD',
		'CL'=>'CHILE',
		'CN'=>'CHINA',
		'CX'=>'CHRISTMAS ISLAND',
		'CC'=>'COCOS (KEELING) ISLANDS',
		'CO'=>'COLOMBIA',
		'KM'=>'COMOROS',
		'CG'=>'CONGO',
		'CD'=>'CONGO, THE DEMOCRATIC REPUBLIC OF THE',
		'CK'=>'COOK ISLANDS',
		'CR'=>'COSTA RICA',
		'CI'=>'COTE D IVOIRE',
		'HR'=>'CROATIA',
		'CU'=>'CUBA',
		'CY'=>'CYPRUS',
		'CZ'=>'CZECH REPUBLIC',
		'DK'=>'DENMARK',
		'DJ'=>'DJIBOUTI',
		'DM'=>'DOMINICA',
		'DO'=>'DOMINICAN REPUBLIC',
		'TP'=>'EAST TIMOR',
		'EC'=>'ECUADOR',
		'EG'=>'EGYPT',
		'SV'=>'EL SALVADOR',
		'GQ'=>'EQUATORIAL GUINEA',
		'ER'=>'ERITREA',
		'EE'=>'ESTONIA',
		'ET'=>'ETHIOPIA',
		'FK'=>'FALKLAND ISLANDS (MALVINAS)',
		'FO'=>'FAROE ISLANDS',
		'FJ'=>'FIJI',
		'FI'=>'FINLAND',
		'FR'=>'FRANCE',
		'GF'=>'FRENCH GUIANA',
		'PF'=>'FRENCH POLYNESIA',
		'TF'=>'FRENCH SOUTHERN TERRITORIES',
		'GA'=>'GABON',
		'GM'=>'GAMBIA',
		'GE'=>'GEORGIA',
		'DE'=>'GERMANY',
		'GH'=>'GHANA',
		'GI'=>'GIBRALTAR',
		'GR'=>'GREECE',
		'GL'=>'GREENLAND',
		'GD'=>'GRENADA',
		'GP'=>'GUADELOUPE',
		'GU'=>'GUAM',
		'GT'=>'GUATEMALA',
		'GN'=>'GUINEA',
		'GW'=>'GUINEA-BISSAU',
		'GY'=>'GUYANA',
		'HT'=>'HAITI',
		'HM'=>'HEARD ISLAND AND MCDONALD ISLANDS',
		'VA'=>'HOLY SEE (VATICAN CITY STATE)',
		'HN'=>'HONDURAS',
		'HK'=>'HONG KONG',
		'HU'=>'HUNGARY',
		'IS'=>'ICELAND',
		'IN'=>'INDIA',
		'ID'=>'INDONESIA',
		'IR'=>'IRAN, ISLAMIC REPUBLIC OF',
		'IQ'=>'IRAQ',
		'IE'=>'IRELAND',
		'IL'=>'ISRAEL',
		'IT'=>'ITALY',
		'JM'=>'JAMAICA',
		'JP'=>'JAPAN',
		'JO'=>'JORDAN',
		'KZ'=>'KAZAKSTAN',
		'KE'=>'KENYA',
		'KI'=>'KIRIBATI',
		'KP'=>'KOREA DEMOCRATIC PEOPLES REPUBLIC OF',
		'KR'=>'KOREA REPUBLIC OF',
		'KW'=>'KUWAIT',
		'KG'=>'KYRGYZSTAN',
		'LA'=>'LAO PEOPLES DEMOCRATIC REPUBLIC',
		'LV'=>'LATVIA',
		'LB'=>'LEBANON',
		'LS'=>'LESOTHO',
		'LR'=>'LIBERIA',
		'LY'=>'LIBYAN ARAB JAMAHIRIYA',
		'LI'=>'LIECHTENSTEIN',
		'LT'=>'LITHUANIA',
		'LU'=>'LUXEMBOURG',
		'MO'=>'MACAU',
		'MK'=>'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF',
		'MG'=>'MADAGASCAR',
		'MW'=>'MALAWI',
		'MY'=>'MALAYSIA',
		'MV'=>'MALDIVES',
		'ML'=>'MALI',
		'MT'=>'MALTA',
		'MH'=>'MARSHALL ISLANDS',
		'MQ'=>'MARTINIQUE',
		'MR'=>'MAURITANIA',
		'MU'=>'MAURITIUS',
		'YT'=>'MAYOTTE',
		'MX'=>'MEXICO',
		'FM'=>'MICRONESIA, FEDERATED STATES OF',
		'MD'=>'MOLDOVA, REPUBLIC OF',
		'MC'=>'MONACO',
		'MN'=>'MONGOLIA',
		'MS'=>'MONTSERRAT',
		'MA'=>'MOROCCO',
		'MZ'=>'MOZAMBIQUE',
		'MM'=>'MYANMAR',
		'NA'=>'NAMIBIA',
		'NR'=>'NAURU',
		'NP'=>'NEPAL',
		'NL'=>'NETHERLANDS',
		'AN'=>'NETHERLANDS ANTILLES',
		'NC'=>'NEW CALEDONIA',
		'NZ'=>'NEW ZEALAND',
		'NI'=>'NICARAGUA',
		'NE'=>'NIGER',
		'NG'=>'NIGERIA',
		'NU'=>'NIUE',
		'NF'=>'NORFOLK ISLAND',
		'MP'=>'NORTHERN MARIANA ISLANDS',
		'NO'=>'NORWAY',
		'OM'=>'OMAN',
		'PK'=>'PAKISTAN',
		'PW'=>'PALAU',
		'PS'=>'PALESTINIAN TERRITORY, OCCUPIED',
		'PA'=>'PANAMA',
		'PG'=>'PAPUA NEW GUINEA',
		'PY'=>'PARAGUAY',
		'PE'=>'PERU',
		'PH'=>'PHILIPPINES',
		'PN'=>'PITCAIRN',
		'PL'=>'POLAND',
		'PT'=>'PORTUGAL',
		'PR'=>'PUERTO RICO',
		'QA'=>'QATAR',
		'RE'=>'REUNION',
		'RO'=>'ROMANIA',
		'RU'=>'RUSSIAN FEDERATION',
		'RW'=>'RWANDA',
		'SH'=>'SAINT HELENA',
		'KN'=>'SAINT KITTS AND NEVIS',
		'LC'=>'SAINT LUCIA',
		'PM'=>'SAINT PIERRE AND MIQUELON',
		'VC'=>'SAINT VINCENT AND THE GRENADINES',
		'WS'=>'SAMOA',
		'SM'=>'SAN MARINO',
		'ST'=>'SAO TOME AND PRINCIPE',
		'SA'=>'SAUDI ARABIA',
		'SN'=>'SENEGAL',
		'SC'=>'SEYCHELLES',
		'SL'=>'SIERRA LEONE',
		'SG'=>'SINGAPORE',
		'SK'=>'SLOVAKIA',
		'SI'=>'SLOVENIA',
		'SB'=>'SOLOMON ISLANDS',
		'SO'=>'SOMALIA',
		'ZA'=>'SOUTH AFRICA',
		'GS'=>'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS',
		'ES'=>'SPAIN',
		'LK'=>'SRI LANKA',
		'SD'=>'SUDAN',
		'SR'=>'SURINAME',
		'SJ'=>'SVALBARD AND JAN MAYEN',
		'SZ'=>'SWAZILAND',
		'SE'=>'SWEDEN',
		'CH'=>'SWITZERLAND',
		'SY'=>'SYRIAN ARAB REPUBLIC',
		'TW'=>'TAIWAN, PROVINCE OF CHINA',
		'TJ'=>'TAJIKISTAN',
		'TZ'=>'TANZANIA, UNITED REPUBLIC OF',
		'TH'=>'THAILAND',
		'TG'=>'TOGO',
		'TK'=>'TOKELAU',
		'TO'=>'TONGA',
		'TT'=>'TRINIDAD AND TOBAGO',
		'TN'=>'TUNISIA',
		'TR'=>'TURKEY',
		'TM'=>'TURKMENISTAN',
		'TC'=>'TURKS AND CAICOS ISLANDS',
		'TV'=>'TUVALU',
		'UG'=>'UGANDA',
		'UA'=>'UKRAINE',
		'AE'=>'UNITED ARAB EMIRATES',
		'GB'=>'UNITED KINGDOM',
		'US'=>'UNITED STATES',
		'UM'=>'UNITED STATES MINOR OUTLYING ISLANDS',
		'UY'=>'URUGUAY',
		'UZ'=>'UZBEKISTAN',
		'VU'=>'VANUATU',
		'VE'=>'VENEZUELA',
		'VN'=>'VIET NAM',
		'VG'=>'VIRGIN ISLANDS, BRITISH',
		'VI'=>'VIRGIN ISLANDS, U.S.',
		'WF'=>'WALLIS AND FUTUNA',
		'EH'=>'WESTERN SAHARA',
		'YE'=>'YEMEN',
		'YU'=>'YUGOSLAVIA',
		'ZM'=>'ZAMBIA',
		'ZW'=>'ZIMBABWE'
	);
$ar_priv = array(
		'admin'=>'Administrator',
		'poster'=>'Blog Poster'
		);
/////////////
?>