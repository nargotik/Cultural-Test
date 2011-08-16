<?php


$allowed = array('admin','poster');
require("../site_init.php");

if ($is_admin == 'poster' && $current_user!=$_GET['user']) $is_admin = ''; /*Remove access to blog if is not owner*/

require("site_credentials.php");
$smarty->caching = 0;

$user = cleanQuery($_GET['user']);

$sql = "SELECT * FROM posts WHERE user='$user' ORDER by date_created ASC";
$result = mysql_query($sql) or dir(mysql_error());
$r=0;
while ($row = mysql_fetch_assoc($result)) {

	
	$_data = unserialize($row['title']);
	$data['conteudo'][$r]['title'] = $_data[$lg];
	
	$data['conteudo'][$r]['id'] = $row['id'];
	$data['conteudo'][$r]['user'] = $row['user'];
	$data['conteudo'][$r]['date_created'] = $row['date_created'];
	$r++;
}

$smarty->assign($data);
$smarty->assign('user',$user);
$smarty->assign('titulo', 'Posts for user '.$user.' | '.$site_name);
$smarty->display('admin/posts.tpl');
?>