<?php
$allowed = array('admin');
require("../site_init.php");
require("site_credentials.php");
$smarty->caching = 0;
	
$sql = "SELECT * FROM users";
$result = mysql_query($sql) or dir(mysql_error());
$r=0;
while ($row = mysql_fetch_assoc($result)) {
	
	$data['conteudo'][$r] = $row;
	$r++;
}

$smarty->assign($data);

$smarty->assign('titulo', 'Users | '.$site_name);
$smarty->display('admin/users.tpl');
?>