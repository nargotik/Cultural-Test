<?php /* Smarty version Smarty-3.0.8, created on 2011-08-16 12:48:49
         compiled from "/Users/narg/Dropbox/teste_smarty/template/include/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5456283494e4a4b1109f5a8-99014627%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '833d8b79356aa45209739f36396a22b27f9fc19d' => 
    array (
      0 => '/Users/narg/Dropbox/teste_smarty/template/include/header.tpl',
      1 => 1313243053,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5456283494e4a4b1109f5a8-99014627',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<title><?php echo $_smarty_tpl->getVariable('title')->value;?>
</title>
<link rel="stylesheet" type="text/css" href="/css/style.css" />
<script type="text/javascript" src="/js/jquery.js"></script>
<script type="text/javascript" src="/js/site.js"></script>
</head>

<body>
<div id="background-wrap">
	<img src="/img/bg.jpg" alt='' />
</div>
<div id="top_men">

	<div id="inner_top">	
	

	<ul>
		<li><a href='#' style='margin-top:-35px;'><img src='/img/ef_logo.png' alt='' /></a></li>
		<li><a href='/' class='link'><img src='/img/home.png' alt='' />&nbsp;<?php echo $_smarty_tpl->getVariable('link')->value['home']['title'];?>
</a></li>
		<li><a href='#'><img src='/img/search.png' alt='' />&nbsp;Browse All EF Programs</a></li>
		<li><a href='<?php echo $_smarty_tpl->getVariable('lg_url')->value;?>
/<?php echo $_smarty_tpl->getVariable('link')->value['aboutus']['url'];?>
' class='link'><img src='/img/info.png' alt='' />&nbsp;<?php echo $_smarty_tpl->getVariable('link')->value['aboutus']['title'];?>
</a></li>
		<li><a href='<?php echo $_smarty_tpl->getVariable('lg_url')->value;?>
/<?php echo $_smarty_tpl->getVariable('link')->value['contactus']['url'];?>
' class='link'><img src='/img/contact.png' alt='' />&nbsp;<?php echo $_smarty_tpl->getVariable('link')->value['contactus']['title'];?>
</a></li>
	</ul>		<div id="languages">
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('linguas')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
	 	  <a href="<?php if ($_smarty_tpl->tpl_vars['k']->value==0){?>/<?php }else{ ?>/<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
/<?php }?>"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</a>
		<?php }} ?>

	</div>
	</div>

</div>

<div id="wrapper">

	<div id="header">
		<div id='logo'><img src='/img/cultural_logo.png' alt='Cultural Care Au Pair' /></div>
		<div id='text'>Work as an Au Pair in<br />USA or Australia</div>
		<div id='links'>

				<img alt="" src="/img/bullet_grey.png" />&nbsp;+41 417 46 68<br/>
				<img alt="" src="/img/bullet_pink.png" />&nbsp;<a href='<?php echo $_smarty_tpl->getVariable('lg_url')->value;?>
/<?php echo $_smarty_tpl->getVariable('link')->value['freebrochure']['url'];?>
' class='link'><?php echo $_smarty_tpl->getVariable('link')->value['freebrochure']['title'];?>
</a><br/>
				<img alt="" src="/img/bullet_pink.png" />&nbsp;<a href='<?php echo $_smarty_tpl->getVariable('lg_url')->value;?>
/<?php echo $_smarty_tpl->getVariable('link')->value['applynow']['url'];?>
' class='link'><?php echo $_smarty_tpl->getVariable('link')->value['applynow']['title'];?>
</a><br/>

		</div>
	</div>
	
	<div id="nav">
		<ul>
			<li><a href='<?php echo $_smarty_tpl->getVariable('lg_url')->value;?>
/<?php echo $_smarty_tpl->getVariable('link')->value['overview']['url'];?>
' class='link'><?php echo $_smarty_tpl->getVariable('link')->value['overview']['title'];?>
</a></li>
			<li><a href='<?php echo $_smarty_tpl->getVariable('lg_url')->value;?>
/blogs' class='link'><?php echo $_smarty_tpl->getVariable('link')->value['blogs']['title'];?>
</a></li>
			<li><a href='<?php echo $_smarty_tpl->getVariable('lg_url')->value;?>
/<?php echo $_smarty_tpl->getVariable('link')->value['information']['url'];?>
' class='link'><?php echo $_smarty_tpl->getVariable('link')->value['information']['title'];?>
</a></li>
			<li><a href='<?php echo $_smarty_tpl->getVariable('lg_url')->value;?>
/<?php echo $_smarty_tpl->getVariable('link')->value['aboutus']['url'];?>
' class='link'><?php echo $_smarty_tpl->getVariable('link')->value['aboutus']['title'];?>
</a></li>
		</ul>
	</div>
	<div id="main_in">

	