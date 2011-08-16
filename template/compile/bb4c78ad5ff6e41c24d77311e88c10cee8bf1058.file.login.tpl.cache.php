<?php /* Smarty version Smarty-3.0.8, created on 2011-08-13 13:50:57
         compiled from "/home/ifnoneco/public_html/test/template/admin/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5080200514e467331d436c1-75905306%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb4c78ad5ff6e41c24d77311e88c10cee8bf1058' => 
    array (
      0 => '/home/ifnoneco/public_html/test/template/admin/login.tpl',
      1 => 1313239602,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5080200514e467331d436c1-75905306',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $sha = sha1("admin/includes/header.tpl" . $_smarty_tpl->cache_id . $_smarty_tpl->compile_id);
if (isset($_smarty_tpl->smarty->template_objects[$sha])) {
$_template = $_smarty_tpl->smarty->template_objects[$sha]; $_template->caching = 9999; $_template->cache_lifetime =  null;
} else {
$_template = new Smarty_Internal_Template("admin/includes/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null);
}
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<form method="post" action="" class="yform">

			    <div class="type-text">
				  <label for="username">
				  <br />
				  <br />
				  <br />
				  <br />
				  <br />
				  <br />
				  Username:</span></label>
				  <input type="text" name="login_user" id="username" size="20" />
</div>
	<div class="type-text">
				  <label for="password">Password</label>
<input type="password" name="login_pass" id="password" size="20" />
				</div>

			  <div class="type-button">
              		<input type="submit" value="Login"  class="reset" id="submit" name="submit" />
	          	</div>
			    </form>
<?php $sha = sha1("admin/includes/footer.tpl" . $_smarty_tpl->cache_id . $_smarty_tpl->compile_id);
if (isset($_smarty_tpl->smarty->template_objects[$sha])) {
$_template = $_smarty_tpl->smarty->template_objects[$sha]; $_template->caching = 9999; $_template->cache_lifetime =  null;
} else {
$_template = new Smarty_Internal_Template("admin/includes/footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null);
}
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>