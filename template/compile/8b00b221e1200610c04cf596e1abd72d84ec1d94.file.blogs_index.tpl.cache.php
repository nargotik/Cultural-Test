<?php /* Smarty version Smarty-3.0.8, created on 2011-08-13 13:50:34
         compiled from "/home/ifnoneco/public_html/test/template/blogs_index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15927260454e46731ad639f6-20003437%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b00b221e1200610c04cf596e1abd72d84ec1d94' => 
    array (
      0 => '/home/ifnoneco/public_html/test/template/blogs_index.tpl',
      1 => 1313239602,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15927260454e46731ad639f6-20003437',
  'function' => 
  array (
  ),
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
_img'><br><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a></div>
		
			<?php }?>

			<?php }} ?>

	</div>
	<div id="main">
	<?php echo $_smarty_tpl->getVariable('text')->value;?>

		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('bloggers')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>


		<a href='<?php echo $_smarty_tpl->getVariable('lg_url')->value;?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['slug'];?>
' class='link'  id='head_<?php echo $_smarty_tpl->tpl_vars['v']->value['slug'];?>
'><br><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a>
	


		<?php }} ?>
	</div>
<?php $sha = sha1("include/footer.tpl" . $_smarty_tpl->cache_id . $_smarty_tpl->compile_id);
if (isset($_smarty_tpl->smarty->template_objects[$sha])) {
$_template = $_smarty_tpl->smarty->template_objects[$sha]; $_template->caching = 9999; $_template->cache_lifetime =  null;
} else {
$_template = new Smarty_Internal_Template("include/footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null);
}
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>