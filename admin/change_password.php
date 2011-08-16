<?php
$allowed = array('admin','poster');
require("../site_init.php");
require("site_credentials.php");
$smarty->caching = 0;
require('../libs/SmartyValidate.class.php');
$smarty->assign('titulo', 'Change Password');

if(!SmartyValidate::is_registered_form('default') || empty($_POST)) {
	// new form, we (re)set the session data
    SmartyValidate::connect($smarty, true);
    // register our validators
    SmartyValidate::register_validator('vpassword', 'password:password2', 'isEqual');
    SmartyValidate::register_validator('vpassword2', 'password', 'notEmpty',false, false, 'trim');
    $smarty->display('admin/change_password.tpl');
} else { 
       // validate after a POST
       SmartyValidate::connect($smarty);
       /*TODO VALIDAR CAPCHA*/
       if(SmartyValidate::is_valid($_POST)) {
			$result = mysql_query("SELECT username FROM users WHERE password=MD5('{$_POST['old_password']}')");
			$row = mysql_fetch_assoc($result);
			if ($row['username'] != $current_user) {
		       $smarty->assign('old_error', 'Invalid Password');
		       $smarty->display('admin/change_password.tpl');exit;
			}
       		
			// no errors, done with SmartyValidate
			$sql = "UPDATE `users` SET `password` = MD5( '{$_POST['password']}' ) WHERE `username` = '$current_user' LIMIT 1 ;";
			$result = mysql_query($sql);
			$rows = mysql_affected_rows();
			if ($rows > 0) $smarty->assign('mensagem', 'Password Sucessfull changed');
			else $smarty->assign('mensagem', 'Error changing password');
			$smarty->display('admin/change_password.tpl');exit;
       } else {
           // error, redraw the form
           $smarty->assign($_POST);
           $smarty->display('admin/change_password.tpl');
       }
	
}
?>