<?php
/*
 * NarG aka Daniel Torres (daniel@inovmais.com)
 * Logout from site
 */
require("../site_init.php");

loggout();
$smarty->assign('current_user', "");
header("Location: /admin/");
?>