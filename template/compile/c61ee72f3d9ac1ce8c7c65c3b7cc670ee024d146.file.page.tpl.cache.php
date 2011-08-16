<?php /* Smarty version Smarty-3.0.8, created on 2011-08-16 12:48:49
         compiled from "/Users/narg/Dropbox/teste_smarty/template/page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5464537234e466f8ba79e25-09105237%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c61ee72f3d9ac1ce8c7c65c3b7cc670ee024d146' => 
    array (
      0 => '/Users/narg/Dropbox/teste_smarty/template/page.tpl',
      1 => 1313243044,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5464537234e466f8ba79e25-09105237',
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
	<div id="main">
	<?php echo $_smarty_tpl->getVariable('text')->value;?>


	</div>
<?php $sha = sha1("include/footer.tpl" . $_smarty_tpl->cache_id . $_smarty_tpl->compile_id);
if (isset($_smarty_tpl->smarty->template_objects[$sha])) {
$_template = $_smarty_tpl->smarty->template_objects[$sha]; $_template->caching = 9999; $_template->cache_lifetime =  null;
} else {
$_template = new Smarty_Internal_Template("include/footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null);
}
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>