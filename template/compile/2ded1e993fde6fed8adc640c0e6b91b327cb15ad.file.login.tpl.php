<?php /* Smarty version Smarty-3.0.8, created on 2011-08-10 02:27:16
         compiled from "/Users/narg/Dropbox/teste_smarty/template/admin/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2380367684e41d0649247a3-11117770%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ded1e993fde6fed8adc640c0e6b91b327cb15ad' => 
    array (
      0 => '/Users/narg/Dropbox/teste_smarty/template/admin/login.tpl',
      1 => 1312936031,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2380367684e41d0649247a3-11117770',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("admin/includes/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
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
<?php $_template = new Smarty_Internal_Template("admin/includes/footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>