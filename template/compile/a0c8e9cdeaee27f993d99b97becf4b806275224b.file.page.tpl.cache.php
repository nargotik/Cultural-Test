<?php /* Smarty version Smarty-3.0.8, created on 2011-08-13 13:58:55
         compiled from "/home/ifnoneco/public_html/test/template/admin/page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1879377104e46750f610010-86791697%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0c8e9cdeaee27f993d99b97becf4b806275224b' => 
    array (
      0 => '/home/ifnoneco/public_html/test/template/admin/page.tpl',
      1 => 1313239602,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1879377104e46750f610010-86791697',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_fckeditor')) include '/home/ifnoneco/public_html/test/libs/plugins/function.fckeditor.php';
?><?php $sha = sha1("admin/includes/header.tpl" . $_smarty_tpl->cache_id . $_smarty_tpl->compile_id);
if (isset($_smarty_tpl->smarty->template_objects[$sha])) {
$_template = $_smarty_tpl->smarty->template_objects[$sha]; $_template->caching = 9999; $_template->cache_lifetime =  null;
} else {
$_template = new Smarty_Internal_Template("admin/includes/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null);
}
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
	<div id="title">
        <h2>Admin » <?php echo $_smarty_tpl->getVariable('title')->value[$_smarty_tpl->getVariable('lg')->value];?>
</h2>
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
            
			<form method="post" action="" class="yform">

            <div id="tabs" class="ui-tabs">
				<ul class="ui-tabs-nav">
				    <?php  $_smarty_tpl->tpl_vars['lingua'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('linguas')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['lingua']->key => $_smarty_tpl->tpl_vars['lingua']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['lingua']->key;
?>
				    <li><a href="#lg-<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php echo $_smarty_tpl->getVariable('linguas_desc')->value[$_smarty_tpl->getVariable('k')->value];?>
</a></li>
					<?php }} ?>
				</ul>
				<div id="deleted_pics" style="display:none;"></div>
				<?php  $_smarty_tpl->tpl_vars['lingua'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('linguas')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['lingua']->key => $_smarty_tpl->tpl_vars['lingua']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['lingua']->key;
?>
				<div id="lg-<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">
				
			  <fieldset>
			    <legend>Page Editing</legend>
			    <div class="type-text">
				  <label for="title_<?php echo $_smarty_tpl->tpl_vars['lingua']->value;?>
">Title</label>
				  <input type="text" name="title_<?php echo $_smarty_tpl->tpl_vars['lingua']->value;?>
" id="title_<?php echo $_smarty_tpl->tpl_vars['lingua']->value;?>
" size="20" value="<?php echo $_smarty_tpl->getVariable('title')->value[$_smarty_tpl->getVariable('lingua')->value];?>
" />
				</div>
				<div class="type-text">
				<label for="text_<?php echo $_smarty_tpl->tpl_vars['lingua']->value;?>
">Text</label>
				<?php echo smarty_function_fckeditor(array('BasePath'=>"/admin/editor/",'InstanceName'=>"text_".($_smarty_tpl->tpl_vars['lingua']->value),'Width'=>"100%",'Height'=>"500px",'ToolbarSet'=>'Default','Value'=>$_smarty_tpl->getVariable('text')->value[$_smarty_tpl->getVariable('lingua')->value]),$_smarty_tpl);?>
 
				</div>


			  </fieldset>
			  <fieldset>
			    <legend>SEO</legend>
				<div class="type-text">
				  <label for="seo_desc_<?php echo $_smarty_tpl->tpl_vars['lingua']->value;?>
">Description</label>
				  <input type="text" name="seo_desc_<?php echo $_smarty_tpl->tpl_vars['lingua']->value;?>
" id="seo_desc_<?php echo $_smarty_tpl->tpl_vars['lingua']->value;?>
" size="20" value="<?php echo $_smarty_tpl->getVariable('seo_desc')->value[$_smarty_tpl->getVariable('lingua')->value];?>
" />
				</div>
			  </fieldset>


	          </div>
	          <?php }} ?>

	         </div>
	         
		
			
	         <div class="type-button">
	         <input type="hidden" name="edita_grava" value="1" />
              		<input type="submit" value="save"  class="reset" id="submit" name="submit" />
	         </div>

<script type="text/javascript">

$(document).ready(function() {

$(function() {
	$("#tabs").tabs();
});

});

</script>


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