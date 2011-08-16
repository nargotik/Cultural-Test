<?php
/*
 * NarG aka Daniel Torres (daniel@inovmais.com)
 * Ficheiro de upload de Imagens
 */
if (isset($_POST['PHPSESSID']))
$_COOKIE['PHPSESSID'] = $_POST['PHPSESSID'];
$allowed = array('admin','poster');
require("../site_init.php");
require("site_credentials.php");

$allowed_exts=array("swf","jpg","gif","png","jpeg");

if (!empty($_FILES)) {
   $tempFile = $_FILES['Filedata']['tmp_name'];
   if (isset($_GET['tipo']))
   if ($_GET['tipo']=='user')
   	$targetPath = dirname(__FILE__)."/../media/users/";
   
   $ext = pathinfo($_FILES['Filedata']['name'], PATHINFO_EXTENSION);  //figures out the extension
   $filename = pathinfo($_FILES['Filedata']['name'], PATHINFO_FILENAME);
   $md5_file = $filename.'_'.substr(md5(microtime()),-5);
   $newFileName = $md5_file.'.'.$ext; //generates random filename, then adds the file extension
   
   $replace="_";
   $pattern="/([[:alnum:]_\.-]*)/";
   $newFileName=str_replace(str_split(preg_replace($pattern,$replace,$newFileName)),$replace,$newFileName);
   $newFileName=strtolower($newFileName);
   
   $targetFile =  str_replace('//','/',$targetPath) . $newFileName;
   
   if (!in_array($ext,$allowed_exts)) die('1');
   move_uploaded_file($tempFile,$targetFile);
   @chmod($targetFile, $chmod_upload);
}

if ($newFileName)
   echo $newFileName;
else // Required to trigger onComplete function on Mac OSX
   echo '1';

?>