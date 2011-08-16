<?php /* Smarty version Smarty-3.0.8, created on 2011-08-12 04:06:25
         compiled from "/Users/narg/Dropbox/teste_smarty/template/admin/users.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5182280444e448aa1f16b18-69322541%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c530d71593dcc0d5a77da34c8cd99fd06a268a3b' => 
    array (
      0 => '/Users/narg/Dropbox/teste_smarty/template/admin/users.tpl',
      1 => 1313114783,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5182280444e448aa1f16b18-69322541',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("admin/includes/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
	<div id="title">
        <h2>Admin » Users Managment</h2>
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
            
			<form method="post" action="" class="yform">

			<a href="user.php">Add User</a><br/><br/>
			
			<table id="noticias" cellspacing="0" cellpadding="2" class="uploadedpics full">
				<tr class="nodrop nodrag">
					<th>Username</th>
					<th>Name</th>
					<th>Last Login</th>
					<th>Privileges</th>
					<th width="80px" align='right'></th>
				</tr> 
				 <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['record']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['record']['name'] = 'record';
$_smarty_tpl->tpl_vars['smarty']->value['section']['record']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('conteudo')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['record']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['record']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['record']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['record']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['record']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['record']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['record']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['record']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['record']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['record']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['record']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['record']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['record']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['record']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['record']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['total']);
?>
				    <tr id='<?php echo $_smarty_tpl->getVariable('conteudo')->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['username'];?>
'>
				    	<td><?php echo $_smarty_tpl->getVariable('conteudo')->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['username'];?>
</td>
				    	<td><?php echo $_smarty_tpl->getVariable('conteudo')->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['name'];?>
</td>
				    	<td><?php echo $_smarty_tpl->getVariable('conteudo')->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['last_seen'];?>
</td>
				    	<td><?php echo $_smarty_tpl->getVariable('conteudo')->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['priv'];?>
</td>
				    	<td  align='right'>
				    	<?php if ($_smarty_tpl->getVariable('conteudo')->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['username']!=$_smarty_tpl->getVariable('current_user')->value){?><a href='javascript:' class='btn_del' rel='<?php echo $_smarty_tpl->getVariable('conteudo')->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['username'];?>
' ><img src='/img/cancel.png' /></a><?php }?>
				    	&nbsp;
				    	<a href='user.php?id=<?php echo $_smarty_tpl->getVariable('conteudo')->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['username'];?>
' ><img src='/img/edit.png' /></a>&nbsp;
				    	<a href='posts.php?user=<?php echo $_smarty_tpl->getVariable('conteudo')->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['username'];?>
' ><img src='/img/blog.png' /></a>
				    	</td>

				    </tr>
				 <?php endfor; else: ?>
				 <tr class="nodrop nodrag">
				 	<td colspan="5">There is no users</td>
				 </tr>
				 <?php endif; ?> 
				
			</table>
						

	         <div class="type-button">
				
              		<!--<input type="submit" value="Gravar"  class="reset" id="submit" name="submit" />-->
	         </div>

<script type="text/javascript">
$(document).ready(function() {
	

	
	$(".btn_del").click(function () { 
		laye = $(this).attr('rel');
		  apprise('Really want to delete user and all his posts?', {'verify':true}, function(r)
				    {
				    if(r)
				        {
				        // user clicked 'Yes'
						$('#'+laye).fadeOut(500, function() {  $('#'+$(this).attr('rel')).remove(); });
						$('#AjaxResult').show();
						$('#AjaxResult').load("user_delete.php?id="+laye);     
						
						setTimeout(function() { $('#AjaxResult').fadeOut(1000, function() {  $('#AjaxResult').empty(); });  }, 400);
				        }
				    else
				        {
				        // user clicked 'No'

				        }
				    });

    });
    $("a.group").fancybox({
		'hideOnContentClick': false
	});

});

</script>


			 </form>
          </div>
          <!-- IE Column Clearing -->
          <div id="ie_clearing"> &#160; </div>
        </div>
      </div>
<?php $_template = new Smarty_Internal_Template("admin/includes/footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>