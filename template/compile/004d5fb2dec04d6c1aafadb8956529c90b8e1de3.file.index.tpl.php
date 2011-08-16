<?php /* Smarty version Smarty-3.0.8, created on 2011-08-10 02:32:18
         compiled from "/Users/narg/Dropbox/teste_smarty/template/admin/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19405478694e41d19271b198-94300582%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '004d5fb2dec04d6c1aafadb8956529c90b8e1de3' => 
    array (
      0 => '/Users/narg/Dropbox/teste_smarty/template/admin/index.tpl',
      1 => 1312936334,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19405478694e41d19271b198-94300582',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("admin/includes/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
	<div id="title">
        <h2>Admin Panel » Index</h2>
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

          </div>
          <!-- IE Column Clearing -->
          <div id="ie_clearing"> &#160; </div>
        </div>
      </div>
<?php $_template = new Smarty_Internal_Template("admin/includes/footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>