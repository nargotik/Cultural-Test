<?php
$allowed = array('admin');
require("../site_init.php");
require("site_credentials.php");

$cache_id = $_GET['id'].$current_user;

if (isset($_POST['edita_grava']) && isset($_GET['id'])) {
	
	/*Serialized vars*/
	foreach ($languages as $chave => $lingua) {
		$text[$lingua] = $_POST['text_'.$lingua];
		$title[$lingua] = $_POST['title_'.$lingua];
		$seo_desc[$lingua] = $_POST['seo_desc_'.$lingua];

	}

	$id = cleanQuery($_GET['id']);
	$text_bd = prepData(serialize($text));
	$title_bd = prepData(serialize($title));
	$seo_desc_bd = prepData(serialize($seo_desc));

	$sql = "
	INSERT INTO `pages` (`id` ,`title` ,`text` ,`seo_desc`)
	VALUES ('$id', '$title_bd', '$text_bd', '$seo_desc_bd')
	ON DUPLICATE KEY UPDATE 
		`title`='$title_bd',
		`text`='$text_bd',
		 `seo_desc` = '$seo_desc_bd'
	";
	mysql_query($sql) or die(mysql_error());

	/*SLUG*/
	foreach ($languages as $chave => $lingua) {
		$sql = "DELETE FROM `slugs` WHERE id='$id' AND lg='$lingua'";			/*delete actual slugs*/
		mysql_query($sql) or die(mysql_error());
		if ($title[$lingua] == "") $title[$lingua] = 'no-name';
		$slug = $slug_init = slug_gen($title[$lingua]);
		while (slug_exists($slug,$lingua)) {
			$e++;$slug = $slug_init."-".$e;
		}
		$sql = "
		INSERT INTO `slugs` (`id`,`lg` ,`slug`,`module`)
		VALUES ('$id', '$lingua', '$slug','page')
		ON DUPLICATE KEY UPDATE 
			`slug`='$slug';\n
		";
		$slug = $slug_init = '';
		//echo $sql;
		mysql_query($sql) or die(mysql_error());
	}
	
	$smarty->clearAllCache();													/*Clear smarty cache*/
}
/* Get id contents from database*/
if (isset($_GET['id'])) {
	$id = cleanQuery($_GET['id']);
	$sql = "SELECT * FROM pages WHERE id='$id'";
	$result = mysql_query($sql) or dir(mysql_error());
	$row = mysql_fetch_assoc($result);
	if (is_array($row)) {
		foreach ($languages as $chave => $lingua) {
			$data['text'] = unserialize($row['text']);
			$data['title'] = unserialize($row['title']);
			$data['seo_desc'] = unserialize($row['seo_desc']);
		}
		$smarty->assign($data);
	}
}

$smarty->assign('titulo', 'Edit Page | '.$site_name);
$smarty->display('admin/page.tpl',$cache_id);
?>