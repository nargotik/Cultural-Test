<?php /* Smarty version Smarty-3.0.8, created on 2011-08-13 13:59:51
         compiled from "/home/ifnoneco/public_html/test/template/admin/posts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16787886094e467547dcd609-50488241%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e3f90c9b47c6d36b380328e6b865986855e2327' => 
    array (
      0 => '/home/ifnoneco/public_html/test/template/admin/posts.tpl',
      1 => 1313239602,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16787886094e467547dcd609-50488241',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("admin/includes/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
	<div id="title">
        <h2>Admin » Posts for user <?php echo $_smarty_tpl->getVariable('user')->value;?>
</h2>
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

			<a href="post.php?user=<?php echo $_smarty_tpl->getVariable('user')->value;?>
">Add Post</a><br/><br/>
			
			<table id="noticias" cellspacing="0" cellpadding="2" class="uploadedpics full">
				<tr class="nodrop nodrag">
					<th>Title</th>
					<th>Date Created</th>
					<th width="60px"></th>
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
				    <tr id='<?php echo $_smarty_tpl->getVariable('conteudo')->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['id'];?>
'>
				    	<td><?php echo $_smarty_tpl->getVariable('conteudo')->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['title'];?>
</td>
				    	<td><?php echo $_smarty_tpl->getVariable('conteudo')->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['date_created'];?>
</td>
				    	<td>
				    	<a href='javascript:' class='btn_del' rel='<?php echo $_smarty_tpl->getVariable('conteudo')->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['id'];?>
' ><img src='/img/cancel.png' /></a>
				    	&nbsp;&nbsp;&nbsp;
				    	<a href='post.php?id=<?php echo $_smarty_tpl->getVariable('conteudo')->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['id'];?>
&user=<?php echo $_smarty_tpl->getVariable('conteudo')->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]['user'];?>
' ><img src='/img/edit.png' /></a>
				    	</td>

				    </tr>
				 <?php endfor; else: ?>
				 <tr class="nodrop nodrag">
				 	<td colspan="5">There are no posts for this user</td>
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
		  apprise('Really want to delete this post?', {'verify':true}, function(r)
				    {
				    if(r)
				        {
				        // user clicked 'Yes'
						$('#'+laye).fadeOut(500, function() {  $('#'+$(this).attr('rel')).remove(); });
						$('#AjaxResult').show();
						$('#AjaxResult').load("post_delete.php?id="+laye);     
						
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