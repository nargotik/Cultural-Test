<?php
$allowed = array('admin');
require("../site_init.php");
require("site_credentials.php");

$id = cleanquery($_GET['id']);

if($id == $current_user) {
	echo "Can't Delete Yourself<br/>";exit;
}

$sql = "DELETE FROM users WHERE username='$id' LIMIT 1";
mysql_query($sql);
$sql = "DELETE FROM blogs WHERE username='$id'";
mysql_query($sql);
echo "Deleted...<br/>";
$smarty->clearAllCache();	
?>
