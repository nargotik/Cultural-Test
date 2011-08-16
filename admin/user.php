<?php
$allowed = array('admin');
require("../site_init.php");
require("site_credentials.php");
$smarty->caching = 0;

$data['flags'] = $ar_countries;
$data['privs'] = $ar_priv;
$heads = file_list("../img/heads/","png"); /*Get heads on img folder*/

foreach ($heads as $key => $value)
	if (!preg_match("/_h.png/i", $value)) $data['heads'][$value] = $value; 
	
$smarty->assign($data);

if (isset($_POST['edita_grava'])) {
	$id = intval($_POST['id']);
	$password = $_POST['password'];
	$password2 = $_POST['repassword'];
	$nome = $_POST['nome'];
	$username = cleanquery($_POST['username']);
	$name = $_POST['name'];
	$image = $_POST['image'];
	$head = $_POST['head'];
	$from = $_POST['from'];
	$in = $_POST['in'];
	$location = $_POST['location'];
	$aupairloc = $_POST['aupairloc'];
	$priv = $_POST['priv'];
	//echo $id;exit;
	if ($id=='' && $password=='') { /*USER MUST HAVE A PASSWORD*/
		$_data['password_error'] = "Password can't be empty";$error=1;
	}
	if ($id=='') { /*CHECK FOR EXISTING USER*/
		if (is_array(user_details($username))){
			$_data['username_error'] = "Username already exists";$error=1;
		}
	}
	if ($password != $password2) { /*Passwords must match*/
		$_data['password_error'] .= "Password dont match";$error=1;
	}
	if(!preg_match('/[a-zA-Z]{0,1}[a-zA-Z0-9._-]$/i', $username)){	/*Invalid username*/
		$_data['username_error'] = "Invalid username";$error=1;
	} 
	if ($error==1) {
		$smarty->assign('titulo', "User $username | ".$site_name);
		$smarty->assign($_data);
		$smarty->assign($_POST);
		$smarty->display('admin/user.tpl');exit;
	}
	if ($id!='' && $password!='') { /*Requested user password change*/
		$sql_add = "`password`=MD5('$password'),";
	}
	$sql = "
	INSERT INTO `users` (`id`, `name`, `username`, `image`, `location`, `aupairloc`, `head`, `password`, `last_session`, `last_ip`, `last_seen`, `admin`, `priv`, `from`, `in`)
	VALUES ('$id', '$name' , '$username', '$image','$location','$aupairloc','$head',MD5('password'),'','','',1,'$priv','$from','$in')
	ON DUPLICATE KEY UPDATE 
		`name`='$name',
		`image`='$image',
		`location`='$location',
		`aupairloc`='$aupairloc',
		`from`='$from',
		`in`='$in',
		$sql_add
		`head`='$head',
		`priv`='$priv'
		
	";
$smarty->clearAllCache();	
	mysql_query($sql) or die(mysql_error());
	if($id=='') $id = mysql_insert_id();
	
	
	/*SLUG*/
	foreach ($languages as $chave => $lingua) {
		$sql = "DELETE FROM `slugs` WHERE id='$username' AND lg='$lingua' AND module='blogs'";			/*delete actual slugs*/
		mysql_query($sql) or die(mysql_error());
		if ($username == "") $username = 'unknown-user';
		$slug = $slug_init = slug_gen($username);
		while (slug_exists2($slug,'',$lingua)) {
			$e++;$slug = $slug_init."-".$e;
		}
		$sql = "
		INSERT INTO `slugs` (`id`,`lg` ,`slug`,`module`)
		VALUES ('$username', '$lingua', '$slug','blogs')
		ON DUPLICATE KEY UPDATE 
			`slug`='$slug';\n
		";
		$slug = $slug_init = '';
		//echo $sql;
		mysql_query($sql) or die(mysql_error());
	}
	
	header("Location: users.php");

}

$id = cleanquery($_GET['id']);
if (isset($id)) {
	$sql = "SELECT * FROM users WHERE username='$id'";
	$result = mysql_query($sql) or dir(mysql_error());
	$r=0;
	$r=0;
	while ($row = mysql_fetch_assoc($result)) {
		$smarty->assign($row);
	}
} 	

$smarty->assign('titulo', "User $id | ".$site_name);
$smarty->display('admin/user.tpl');
?>