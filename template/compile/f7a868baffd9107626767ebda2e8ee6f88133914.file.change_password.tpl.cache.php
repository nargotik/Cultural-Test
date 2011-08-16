<?php /* Smarty version Smarty-3.0.8, created on 2011-08-12 03:42:20
         compiled from "/Users/narg/Dropbox/teste_smarty/template/admin/change_password.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6355350464e4484fc0d3159-56536298%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7a868baffd9107626767ebda2e8ee6f88133914' => 
    array (
      0 => '/Users/narg/Dropbox/teste_smarty/template/admin/change_password.tpl',
      1 => 1313113337,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6355350464e4484fc0d3159-56536298',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_validate')) include '/Users/narg/Dropbox/teste_smarty/libs/plugins/function.validate.php';
?><?php $sha = sha1("admin/includes/header.tpl" . $_smarty_tpl->cache_id . $_smarty_tpl->compile_id);
if (isset($_smarty_tpl->smarty->template_objects[$sha])) {
$_template = $_smarty_tpl->smarty->template_objects[$sha]; $_template->caching = 9999; $_template->cache_lifetime =  null;
} else {
$_template = new Smarty_Internal_Template("admin/includes/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null);
}
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>

<?php echo smarty_function_validate(array('id'=>"vpassword2",'assign'=>"password_error",'message'=>"Password can not be empty."),$_smarty_tpl);?>

<?php echo smarty_function_validate(array('id'=>"vpassword",'assign'=>"password_error",'message'=>"Passwords dont match."),$_smarty_tpl);?>

	<div id="title">
        <h2>Admin » <?php echo $_smarty_tpl->getVariable('current_user')->value;?>
 » Change Password</h2>
      </div>

      <div id="main">
        <div id="col1">
          <div id="col1_content" class="clearfix">
            <!-- add your content here -->
            <?php $sha = sha1("admin/includes/menu.tpl" . $_smarty_tpl->cache_id . $_smarty_tpl->compile_id);
if (isset($_smarty_tpl->smarty->template_objects[$sha])) {
$_template = $_smarty_tpl->smarty->template_objects[$sha]; $_template->caching = 9999; $_template->cache_lifetime =  null;
} else {
$_template = new Smarty_Internal_Template("admin/includes/menu.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null);
}
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
          </div>
        </div>
        <div id="col3">
          <div id="col3_content" class="clearfix">
            <!-- add your content here -->
            <div class="subcolumns"><div class="center">
<?php if ($_smarty_tpl->getVariable('mensagem')->value!=''){?><h2><?php echo $_smarty_tpl->getVariable('mensagem')->value;?>
</h2><?php }?>
			</div></div>
            
            <form method="post" action="" class="yform">
			  <fieldset>
			    <legend>Change Password</legend>
				<div class="type-text <?php if ($_smarty_tpl->getVariable('old_error')->value!=''){?> error" role="alert" aria-live="assertive<?php }?>">
			    <?php if ($_smarty_tpl->getVariable('old_error')->value!=''){?><strong class="message"><?php echo $_smarty_tpl->getVariable('old_error')->value;?>
</strong><?php }?>
				  <label for="old_password">Old Password</label>
				  <input type="password" name="old_password" id="old_password" size="20" />
				</div>
				
			    <div class="type-text <?php if ($_smarty_tpl->getVariable('password_error')->value!=''){?> error" role="alert" aria-live="assertive<?php }?>">
			    <?php if ($_smarty_tpl->getVariable('password_error')->value!=''){?><strong class="message"><?php echo $_smarty_tpl->getVariable('password_error')->value;?>
</strong><?php }?>
				  <label for="password">New Password</label>
				  <input type="password" name="password" id="password" size="20" />
				</div>
				
				<div class="type-text <?php if ($_smarty_tpl->getVariable('password_error')->value!=''){?> error" role="alert" aria-live="assertive<?php }?>">
			      <label for="password2">Repeat New Password</label>
				  <input type="password" name="password2" id="password2" size="20" />
				</div>
				
			  </fieldset>
			  <div class="type-button">
              		<input type="submit" value="Alterar"  class="reset" id="submit" name="submit" />
	          </div>
			</form>
			
          </div>
          <!-- IE Column Clearing -->
          <div id="ie_clearing"> &#160; </div>
        </div>
      </div>
<?php $sha = sha1("admin/includes/footer.tpl" . $_smarty_tpl->cache_id . $_smarty_tpl->compile_id);
if (isset($_smarty_tpl->smarty->template_objects[$sha])) {
$_template = $_smarty_tpl->smarty->template_objects[$sha]; $_template->caching = 9999; $_template->cache_lifetime =  null;
} else {
$_template = new Smarty_Internal_Template("admin/includes/footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null);
}
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>