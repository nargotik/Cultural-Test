<?php /* Smarty version Smarty-3.0.8, created on 2011-08-13 13:57:58
         compiled from "/home/ifnoneco/public_html/test/template/admin/user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19790406584e4674d65f62a2-87147132%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05771a3df83a8f9aa93d564a0a84a49b7beba481' => 
    array (
      0 => '/home/ifnoneco/public_html/test/template/admin/user.tpl',
      1 => 1313239602,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19790406584e4674d65f62a2-87147132',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_html_options')) include '/home/ifnoneco/public_html/test/libs/plugins/function.html_options.php';
?><?php $_template = new Smarty_Internal_Template("admin/includes/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
	<div id="title">
        <h2>Admin » User Details</h2>
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

			<form method="post" action="" class="yform" enctype="multipart/form-data">

				<div id="deleted_pics" style="display:none;"></div>
				
			  <?php echo $_smarty_tpl->getVariable('mensagem')->value;?>

			  <fieldset>
			    <legend>User Details</legend>
			    <div class="type-text <?php if ($_smarty_tpl->getVariable('username_error')->value!=''){?> error" role="alert" aria-live="assertive<?php }?>">
			    <?php if ($_smarty_tpl->getVariable('username_error')->value!=''){?><strong class="message"><?php echo $_smarty_tpl->getVariable('username_error')->value;?>
</strong><?php }?>
				  <label for="username">Username</label>
				  <?php if ($_smarty_tpl->getVariable('id')->value){?><?php echo $_smarty_tpl->getVariable('username')->value;?>
<?php }?><input type="<?php if ($_smarty_tpl->getVariable('id')->value){?>hidden<?php }else{ ?>text<?php }?>" name="username" id="username" size="20" value="<?php echo $_smarty_tpl->getVariable('username')->value;?>
" />
				</div>
				
			    <div class="type-text <?php if ($_smarty_tpl->getVariable('name_error')->value!=''){?> error" role="alert" aria-live="assertive<?php }?>">
			    <?php if ($_smarty_tpl->getVariable('name_error')->value!=''){?><strong class="message"><?php echo $_smarty_tpl->getVariable('name_error')->value;?>
</strong><?php }?>
				  <label for="name">Name</label>
				  <input type="text" name="name" id="name" size="20" value="<?php echo $_smarty_tpl->getVariable('name')->value;?>
" />
				</div>

			    <div class="type-text">
				  <label for="from">From</label>
				  <input type="text" name="from" id="from" size="20" value="<?php echo $_smarty_tpl->getVariable('from')->value;?>
" />
				</div>
				    <div class="type-text">
				  <label for="in">In</label>
				  <input type="text" name="in" id="in" size="20" value="<?php echo $_smarty_tpl->getVariable('in')->value;?>
" />
				</div>
				<div class="subcl type-text">
				  
						<label for="file">User Picture</label>
						<div id="fileQueue"></div>
						<div id="fileup">
						<input type="file" name="uploadify" id="uploadify" />
						</div>
					
						<div id="uploadedpics">
						</div>
						
						<?php if ($_smarty_tpl->getVariable('image')->value){?><script type="text/javascript">
						$(document).ready(function() {
						wrt_uploadify_image('<?php echo $_smarty_tpl->getVariable('image')->value;?>
','#uploadedpics','#fileup','image');
						});
						</script><?php }?>
						
				</div>
				<div class="subcl type-select">
				  <strong class="message"><img src='/img/spacer.gif' id='head_picc' /></strong>
				  <label for="head">Head Picture</label>
				  <?php echo smarty_function_html_options(array('name'=>"head",'id'=>"head_pic",'options'=>$_smarty_tpl->getVariable('heads')->value,'selected'=>$_smarty_tpl->getVariable('head')->value),$_smarty_tpl);?>

				</div>
				<div class="subcl type-select">
				  <strong class="message"><img src='/img/spacer.gif' id='location_pic' /></strong>
				  <label for="location">User Country</label>
				  <?php echo smarty_function_html_options(array('name'=>"location",'id'=>"location",'options'=>$_smarty_tpl->getVariable('flags')->value,'selected'=>$_smarty_tpl->getVariable('location')->value),$_smarty_tpl);?>

				</div>
				<div class="subcl type-select">
				  <strong class="message"><img src='/img/spacer.gif' id='aupairloc_pic' /></strong>
				  <label for="aupairloc">User Au Pair Country</label>
				  <?php echo smarty_function_html_options(array('name'=>"aupairloc",'id'=>"aupairloc",'options'=>$_smarty_tpl->getVariable('flags')->value,'selected'=>$_smarty_tpl->getVariable('aupairloc')->value),$_smarty_tpl);?>

				</div>
				<div class="subcl type-select">
				  <label for="priv">Privileges</label>
				  <?php if ($_smarty_tpl->getVariable('username')->value==$_smarty_tpl->getVariable('current_user')->value){?>
				  <strong class="message"><?php echo $_smarty_tpl->getVariable('privs')->value[$_smarty_tpl->getVariable('priv')->value];?>
 (Can't change yourself)<input type="hidden" name="priv" size="20" value="<?php echo $_smarty_tpl->getVariable('priv')->value;?>
"/></strong>
				  <?php }else{ ?>
				  <?php echo smarty_function_html_options(array('name'=>"priv",'id'=>"priv",'options'=>$_smarty_tpl->getVariable('privs')->value,'selected'=>$_smarty_tpl->getVariable('priv')->value),$_smarty_tpl);?>

				  <?php }?>
				</div>
				 <fieldset>
			    <legend>Leave empty for no change</legend>
				<div class="subcl type-text <?php if ($_smarty_tpl->getVariable('password_error')->value!=''){?> error" role="alert" aria-live="assertive<?php }?>">
				<?php if ($_smarty_tpl->getVariable('password_error')->value!=''){?><strong class="message"><?php echo $_smarty_tpl->getVariable('password_error')->value;?>
</strong><?php }?>
				  <label for="password">Password</label>
				  <input type="password" name="password" id="password" size="20" value="" />
				</div>
				<div class="subcl type-text<?php if ($_smarty_tpl->getVariable('password_error')->value!=''){?> error" role="alert" aria-live="assertive<?php }?>">
				<?php if ($_smarty_tpl->getVariable('password_error')->value!=''){?><strong class="message"><?php echo $_smarty_tpl->getVariable('password_error')->value;?>
</strong><?php }?>
				  <label for="repassword">Retype Password</label>
				  <input type="password" name="repassword" id="repassword" size="20" value="" />
				</div>
				</fieldset>
			  </fieldset>




	         <div class="type-button">
	         <input type="hidden" name="id" size="20" value="<?php echo $_smarty_tpl->getVariable('id')->value;?>
"/>
	         <input type="hidden" name="edita_grava" value="1" />
              		<input type="submit" value="Save"  class="reset" id="submit" name="submit" />
	         </div>

<script type="text/javascript">

$(document).ready(function() {
	$("#uploadify").uploadify({
		'uploader'       : '/js/upload/uploadify.swf',
		'script'         : '/admin/upload.php?tipo=user&<?php echo $_smarty_tpl->getVariable('sess_name')->value;?>
=<?php echo $_smarty_tpl->getVariable('sess')->value;?>
',
		'scriptData'     : { '<?php echo $_smarty_tpl->getVariable('sess_name')->value;?>
' : '<?php echo $_smarty_tpl->getVariable('sess')->value;?>
' } ,
		'cancelImg'      : '/js/upload/cancel.png',
		'folder'         : 'uploads',
		'queueID'        : 'fileQueue',
		'auto'           : true,
		'multi'          : false,
		onComplete: function (evt, queueID, fileObj, response, data) {
         	wrt_uploadify_image(response,'#uploadedpics','#fileup','imagem');
      	},
	});
	 $("#aupairloc").change(function() { 
		 var img = "/img/flags/" + $(this).val().toLowerCase() + ".png";
		 $("#aupairloc_pic").attr('src',img);
	}); 
	 $("#location").change(function() { 
		 var img = "/img/flags/" + $(this).val().toLowerCase() + ".png";
		 $("#location_pic").attr('src',img);
	}); 
	 $("#head_pic").change(function() { 
		 var img = "/img/heads/" + $(this).val();
		 $("#head_picc").attr('src',img);
	});  
	 $("#aupairloc_pic").attr('src',"/img/flags/" + $("#aupairloc").val().toLowerCase() + ".png");
	 $("#location_pic").attr('src',"/img/flags/" + $("#location").val().toLowerCase() + ".png");
	 $("#head_picc").attr('src',"/img/heads/" + $("#head_pic").val());
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