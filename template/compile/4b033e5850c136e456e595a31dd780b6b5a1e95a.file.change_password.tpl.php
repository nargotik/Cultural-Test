<?php /* Smarty version Smarty-3.0.8, created on 2011-08-13 14:01:00
         compiled from "/home/ifnoneco/public_html/test/template/admin/change_password.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15683366614e46758c5b6d42-23592614%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b033e5850c136e456e595a31dd780b6b5a1e95a' => 
    array (
      0 => '/home/ifnoneco/public_html/test/template/admin/change_password.tpl',
      1 => 1313239602,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15683366614e46758c5b6d42-23592614',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_validate')) include '/home/ifnoneco/public_html/test/libs/plugins/function.validate.php';
?><?php $_template = new Smarty_Internal_Template("admin/includes/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
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
            <?php $_template = new Smarty_Internal_Template("admin/includes/menu.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
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
<?php $_template = new Smarty_Internal_Template("admin/includes/footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>