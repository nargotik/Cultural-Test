<?php
$allowed = array('admin','poster');
require("../site_init.php");
if ($is_admin == 'poster' && $current_user!=poster($_GET['id'])) $is_admin = ''; /*Remove access to blog if is not owner os this post*/
require("site_credentials.php");

$id = intval($_GET['id']);


$sql = "DELETE FROM posts WHERE id='$id' LIMIT 1";
mysql_query($sql);
$sql = "DELETE FROM slugs WHERE id='$id' AND module='post'";
mysql_query($sql);
echo "Deleted...<br/>";
$smarty->clearAllCache();	
?>
