<?php
/*
 * NarG aka Daniel Torres (daniel@inovmais.com)
 * index admin site
 */
$allowed = array('admin','poster');
require("../site_init.php");
require("site_credentials.php");
$smarty->caching = 0;
$lgg['linguas'] = $languages;					/*Assigns languages to lgg to put on template var*/
$lgg['linguas_desc'] = $languages_description;
$smarty->assign($lgg);

$picture_exts=array(".swf",".jpg",".gif",".png");

$smarty->assign('titulo', 'Admin Panel | '.$site_name);
$smarty->display('admin/index.tpl');
?>