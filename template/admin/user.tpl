{include file="admin/includes/header.tpl"}
	<div id="title">
        <h2>Admin » User Details</h2>
      </div>

      <div id="main">
        <div id="col1">
          <div id="col1_content" class="clearfix">
            <!-- add your content here -->
            {include file="admin/includes/menu.tpl"}
          </div>
        </div>
        <div id="col3">
          <div id="col3_content" class="clearfix">
            <!-- add your content here -->

			<form method="post" action="" class="yform" enctype="multipart/form-data">

				<div id="deleted_pics" style="display:none;"></div>
				
			  {$mensagem}
			  <fieldset>
			    <legend>User Details</legend>
			    <div class="type-text {if $username_error neq ""} error" role="alert" aria-live="assertive{/if}">
			    {if $username_error neq ""}<strong class="message">{$username_error}</strong>{/if}
				  <label for="username">Username</label>
				  {if $id}{$username}{/if}<input type="{if $id}hidden{else}text{/if}" name="username" id="username" size="20" value="{$username}" />
				</div>
				
			    <div class="type-text {if $name_error neq ""} error" role="alert" aria-live="assertive{/if}">
			    {if $name_error neq ""}<strong class="message">{$name_error}</strong>{/if}
				  <label for="name">Name</label>
				  <input type="text" name="name" id="name" size="20" value="{$name}" />
				</div>

			    <div class="type-text">
				  <label for="from">From</label>
				  <input type="text" name="from" id="from" size="20" value="{$from}" />
				</div>
				    <div class="type-text">
				  <label for="in">In</label>
				  <input type="text" name="in" id="in" size="20" value="{$in}" />
				</div>
				<div class="subcl type-text">
				  
						<label for="file">User Picture</label>
						<div id="fileQueue"></div>
						<div id="fileup">
						<input type="file" name="uploadify" id="uploadify" />
						</div>
					
						<div id="uploadedpics">
						</div>
						
						{if $image}<script type="text/javascript">
						$(document).ready(function() {
						wrt_uploadify_image('{$image}','#uploadedpics','#fileup','image');
						});
						</script>{/if}
						
				</div>
				<div class="subcl type-select">
				  <strong class="message"><img src='/img/spacer.gif' id='head_picc' /></strong>
				  <label for="head">Head Picture</label>
				  {html_options name="head" id="head_pic" options=$heads selected=$head}
				</div>
				<div class="subcl type-select">
				  <strong class="message"><img src='/img/spacer.gif' id='location_pic' /></strong>
				  <label for="location">User Country</label>
				  {html_options name="location" id="location" options=$flags selected=$location}
				</div>
				<div class="subcl type-select">
				  <strong class="message"><img src='/img/spacer.gif' id='aupairloc_pic' /></strong>
				  <label for="aupairloc">User Au Pair Country</label>
				  {html_options name="aupairloc" id="aupairloc" options=$flags selected=$aupairloc}
				</div>
				<div class="subcl type-select">
				  <label for="priv">Privileges</label>
				  {if $username eq $current_user}
				  <strong class="message">{$privs.$priv} (Can't change yourself)<input type="hidden" name="priv" size="20" value="{$priv}"/></strong>
				  {else}
				  {html_options name="priv" id="priv" options=$privs selected=$priv}
				  {/if}
				</div>
				 <fieldset>
			    <legend>Leave empty for no change</legend>
				<div class="subcl type-text {if $password_error neq ""} error" role="alert" aria-live="assertive{/if}">
				{if $password_error neq ""}<strong class="message">{$password_error}</strong>{/if}
				  <label for="password">Password</label>
				  <input type="password" name="password" id="password" size="20" value="" />
				</div>
				<div class="subcl type-text{if $password_error neq ""} error" role="alert" aria-live="assertive{/if}">
				{if $password_error neq ""}<strong class="message">{$password_error}</strong>{/if}
				  <label for="repassword">Retype Password</label>
				  <input type="password" name="repassword" id="repassword" size="20" value="" />
				</div>
				</fieldset>
			  </fieldset>




	         <div class="type-button">
	         <input type="hidden" name="id" size="20" value="{$id}"/>
	         <input type="hidden" name="edita_grava" value="1" />
              		<input type="submit" value="Save"  class="reset" id="submit" name="submit" />
	         </div>

<script type="text/javascript">

$(document).ready(function() {
	$("#uploadify").uploadify({
		'uploader'       : '/js/upload/uploadify.swf',
		'script'         : '/admin/upload.php?tipo=user&{$sess_name}={$sess}',
		'scriptData'     : { '{$sess_name}' : '{$sess}' } ,
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
{include file="admin/includes/footer.tpl"}