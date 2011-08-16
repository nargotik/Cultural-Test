<?php
$smarty->caching = 0;
$allowed = array('admin','poster');

require("../site_init.php");

if (is_int($_GET['id']))
	if ($is_admin == 'poster' && $current_user!=poster($_GET['id'])) $is_admin = ''; /*Remove access to blog if is not owner os this post*/
else 
	if ($is_admin == 'poster' && $current_user!=$_GET['user']) $is_admin = ''; /*Remove access to blog if is not owner os this post*/

require("site_credentials.php");

$cache_id = $_GET['id'].$current_user;



if (isset($_POST['edita_grava'])) {

	/*Serialized vars*/
	foreach ($languages as $chave => $lingua) {
		$text[$lingua] = $_POST['text_'.$lingua];
		$title[$lingua] = $_POST['title_'.$lingua];
		$seo_desc[$lingua] = $_POST['seo_desc_'.$lingua];

	}
	$user = cleanQuery($_GET['user']);
	
	$id = cleanQuery($_GET['id']);
	$text_bd = prepData(serialize($text));
	$title_bd = prepData(serialize($title));
	$seo_desc_bd = prepData(serialize($seo_desc));

	$sql = "
	INSERT INTO `posts` (`id` ,`user` ,`title` ,`text` ,`seo_desc`, `date_created`)
	VALUES ('$id', '$user', '$title_bd', '$text_bd', '$seo_desc_bd',NOW())
	ON DUPLICATE KEY UPDATE 
		`title`='$title_bd',
		`text`='$text_bd',
		`date_change` = NOW(),
		 `seo_desc` = '$seo_desc_bd'
	";

	mysql_query($sql) or die(mysql_error());
	if($id=='') $id = mysql_insert_id();
	/*SLUG*/
	foreach ($languages as $chave => $lingua) {
		$sql = "DELETE FROM `slugs` WHERE id='$id' AND lg='$lingua' AND module='post'";			/*delete actual slugs*/
		$user_slug = user_slug($user,$lingua);
		mysql_query($sql) or die(mysql_error());
		if ($title[$lingua] == "") $title[$lingua] = 'no-name';
		$slug = $slug_init = slug_gen($title[$lingua]);
		while (slug_exists2($user_slug,$slug,$lingua)) {
			$e++;$slug = $slug_init."-".$e;
		}
		$sql = "
		INSERT INTO `slugs` (`id`,`lg` ,`slug`,`sub_slug`,`module`)
		VALUES ('$id', '$lingua','$user_slug', '$slug','post')
		ON DUPLICATE KEY UPDATE 
			`slug`='$user_slug',
			`sub_slug`='$slug'
			;\n
		";
		$slug = $slug_init = '';
		//echo $sql;
		mysql_query($sql) or die(mysql_error());
	}
	
	$smarty->clearAllCache();													/*Clear smarty cache*/
	header("Location: posts.php?user=$user");
}
/* Get id contents from database*/
if (isset($_GET['id'])) {
	$id = cleanQuery($_GET['id']);
	$sql = "SELECT * FROM posts WHERE id='$id'";
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

$smarty->assign('titulo', 'Edit/Add Post | '.$site_name);
$smarty->display('admin/post.tpl',$cache_id);
?>