<?php /* Smarty version Smarty-3.0.8, created on 2011-08-10 02:51:57
         compiled from "/Users/narg/Dropbox/teste_smarty/template/admin/artigo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3825429014e41d62d5f1a02-13907054%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34f7f010adaedf479f239abb725139b71237381e' => 
    array (
      0 => '/Users/narg/Dropbox/teste_smarty/template/admin/artigo.tpl',
      1 => 1312937515,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3825429014e41d62d5f1a02-13907054',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_fckeditor')) include '/Users/narg/Dropbox/teste_smarty/libs/plugins/function.fckeditor.php';
if (!is_callable('smarty_function_html_options')) include '/Users/narg/Dropbox/teste_smarty/libs/plugins/function.html_options.php';
?><?php $_template = new Smarty_Internal_Template("admin/includes/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
	<div id="title">
        <h2>Admin » Page</h2>
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
			    <legend>Edição de Artigo</legend>
			    <div class="type-text <?php if ($_smarty_tpl->getVariable('titulo_error')->value!=''){?> error" role="alert" aria-live="assertive<?php }?>">
			    <?php if ($_smarty_tpl->getVariable('titulo_error')->value!=''){?><strong class="message"><?php echo $_smarty_tpl->getVariable('titulo_error')->value;?>
</strong><?php }?>
				  <label for="tit_<?php echo $_smarty_tpl->tpl_vars['lingua']->value;?>
">Titulo</label>
				  <input type="text" name="tit_<?php echo $_smarty_tpl->tpl_vars['lingua']->value;?>
" id="tit_<?php echo $_smarty_tpl->tpl_vars['lingua']->value;?>
" size="20" value="<?php echo $_smarty_tpl->getVariable('tit')->value[$_smarty_tpl->getVariable('lingua')->value];?>
" />
				</div>
				<div class="type-text">
				<label for="texto_<?php echo $_smarty_tpl->tpl_vars['lingua']->value;?>
">Texto</label>
				<?php echo smarty_function_fckeditor(array('BasePath'=>"/admin/editor/",'InstanceName'=>"texto_".($_smarty_tpl->tpl_vars['lingua']->value),'Width'=>"100%",'Height'=>"500px",'ToolbarSet'=>'Default','Value'=>$_smarty_tpl->getVariable('texto')->value[$_smarty_tpl->getVariable('lingua')->value]),$_smarty_tpl);?>
 
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
	         
			<fieldset>
		    <legend>Geral</legend>

			<div class="type-text">
				<label for="mailform">Email <sup>Deixar em Branco caso n pretenda Formulário</sup></label>
				  <input type="text" name="mailform" id="mailform" size="20" value="<?php echo $_smarty_tpl->getVariable('mailform')->value;?>
" />
			</div>
			<div class="type-select">
				<label for="tipoform">Tipo de Formulário</label>
				<select name="tipoform"  id="tipoform">
				<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->getVariable('formularios')->value,'selected'=>$_smarty_tpl->getVariable('tipoform')->value),$_smarty_tpl);?>

				</select>
			</div>
			
			</fieldset>
			
	         <div class="type-button">
	         <input type="hidden" name="edita_grava" value="1" />
              		<input type="submit" value="Gravar"  class="reset" id="submit" name="submit" />
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
<?php $_template = new Smarty_Internal_Template("admin/includes/footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>