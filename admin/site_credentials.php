<?
if (!$current_user || !in_array($is_admin,$allowed)) {
	$smarty->assign('titulo', 'Login | '.$site_nome);
	$smarty->display('admin/login.tpl');
	exit;
}

if (get_magic_quotes_gpc()) {
	$_GET = stripslashes_recursive($_GET);
	$_POST = stripslashes_recursive($_POST);
	$_COOKIE = stripslashes_recursive($_COOKIE);
}

function stripslashes_recursive($var) {
	return (is_array($var) ? array_map('stripslashes_recursive', $var) : stripslashes($var));
}

?>