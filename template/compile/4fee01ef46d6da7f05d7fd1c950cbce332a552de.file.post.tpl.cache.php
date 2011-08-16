<?php /* Smarty version Smarty-3.0.8, created on 2011-08-13 14:25:03
         compiled from "/home/ifnoneco/public_html/test/template/post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8185026014e4673dc3974a9-25101059%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4fee01ef46d6da7f05d7fd1c950cbce332a552de' => 
    array (
      0 => '/home/ifnoneco/public_html/test/template/post.tpl',
      1 => 1313241897,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8185026014e4673dc3974a9-25101059',
  'function' => 
  array (
  ),
  'cache_lifetime' => 3600,
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $sha = sha1("include/header.tpl" . $_smarty_tpl->cache_id . $_smarty_tpl->compile_id);
if (isset($_smarty_tpl->smarty->template_objects[$sha])) {
$_template = $_smarty_tpl->smarty->template_objects[$sha]; $_template->caching = 9999; $_template->cache_lifetime =  null;
} else {
$_template = new Smarty_Internal_Template("include/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null);
}
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
	<div id="header2">
		<!--Div with text over image-->
		<div id='over_image'><span><?php echo $_smarty_tpl->getVariable('tit')->value;?>
</span></div>
	</div>
	<div id='menu_head'>
		<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable("0", null, null);?>
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('bloggers')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
			<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->getVariable('i')->value+1, null, null);?>
			<?php if ($_smarty_tpl->getVariable('i')->value<=5){?>
			<div class='heads head_<?php echo $_smarty_tpl->tpl_vars['v']->value['slug'];?>
'><a href='<?php echo $_smarty_tpl->getVariable('lg_url')->value;?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['slug'];?>
' class='imgHoverable'  id='head_<?php echo $_smarty_tpl->tpl_vars['v']->value['slug'];?>
'><img src='/img/heads/<?php echo $_smarty_tpl->tpl_vars['v']->value['head'];?>
' id='head_<?php echo $_smarty_tpl->tpl_vars['v']->value['slug'];?>
_img' alt='' /><br /><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a></div>
		
			<?php }?>

			<?php }} ?>

	</div>
	<div id="main">
	
	<a href='<?php echo $_smarty_tpl->getVariable('lg_url')->value;?>
/<?php echo $_smarty_tpl->getVariable('slug')->value;?>
/<?php echo $_smarty_tpl->getVariable('sub_slug')->value;?>
' class='link_blog post' ><br/><?php echo $_smarty_tpl->getVariable('tit')->value;?>
</a><br />
		<iframe src="http://www.facebook.com/plugins/like.php?app_id=264160440263377&amp;href=<?php echo $_smarty_tpl->getVariable('site_url')->value;?>
<?php echo $_smarty_tpl->getVariable('lg_url')->value;?>
/<?php echo $_smarty_tpl->getVariable('v')->value['slug'];?>
/<?php echo $_smarty_tpl->getVariable('v')->value['sub_slug'];?>
&amp;send=false&amp;layout=button_count&amp;width=450&amp;show_faces=true&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:21px;"></iframe>
		<br />
	<?php echo $_smarty_tpl->getVariable('text')->value;?>

<a href='<?php echo $_smarty_tpl->getVariable('lg_url')->value;?>
/<?php echo $_smarty_tpl->getVariable('slug')->value;?>
' class='link_blog' ><br/>Back</a>
	</div>
<?php $sha = sha1("include/footer.tpl" . $_smarty_tpl->cache_id . $_smarty_tpl->compile_id);
if (isset($_smarty_tpl->smarty->template_objects[$sha])) {
$_template = $_smarty_tpl->smarty->template_objects[$sha]; $_template->caching = 9999; $_template->cache_lifetime =  null;
} else {
$_template = new Smarty_Internal_Template("include/footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null);
}
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>