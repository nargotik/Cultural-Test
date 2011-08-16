{include file="admin/includes/header.tpl"}
	<div id="title">
        <h2>Admin » Users Managment</h2>
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
            
			<form method="post" action="" class="yform">

			<a href="user.php">Add User</a><br/><br/>
			
			<table id="noticias" cellspacing="0" cellpadding="2" class="uploadedpics full">
				<tr class="nodrop nodrag">
					<th>Username</th>
					<th>Name</th>
					<th>Last Login</th>
					<th>Privileges</th>
					<th width="80px" align='right'></th>
				</tr>
				{*$conteudo|@debug_print_var*} 
				 {section name=record loop=$conteudo}
				    <tr id='{$conteudo[record].username}'>
				    	<td>{$conteudo[record].username}</td>
				    	<td>{$conteudo[record].name}</td>
				    	<td>{$conteudo[record].last_seen}</td>
				    	<td>{$conteudo[record].priv}</td>
				    	<td  align='right'>
				    	{if $conteudo[record].username neq $current_user}<a href='javascript:' class='btn_del' rel='{$conteudo[record].username}' ><img src='/img/cancel.png' /></a>{/if}
				    	&nbsp;
				    	<a href='user.php?id={$conteudo[record].username}' ><img src='/img/edit.png' /></a>&nbsp;
				    	<a href='posts.php?user={$conteudo[record].username}' ><img src='/img/blog.png' /></a>
				    	</td>

				    </tr>
				 {sectionelse}
				 <tr class="nodrop nodrag">
				 	<td colspan="5">There is no users</td>
				 </tr>
				 {/section} 
				
			</table>
						

	         <div class="type-button">
				
              		<!--<input type="submit" value="Gravar"  class="reset" id="submit" name="submit" />-->
	         </div>
{literal}
<script type="text/javascript">
$(document).ready(function() {
	

	
	$(".btn_del").click(function () { 
		laye = $(this).attr('rel');
		  apprise('Really want to delete user and all his posts?', {'verify':true}, function(r)
				    {
				    if(r)
				        {
				        // user clicked 'Yes'
						$('#'+laye).fadeOut(500, function() {  $('#'+$(this).attr('rel')).remove(); });
						$('#AjaxResult').show();
						$('#AjaxResult').load("user_delete.php?id="+laye);     
						
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
{/literal}
</script>


			 </form>
          </div>
          <!-- IE Column Clearing -->
          <div id="ie_clearing"> &#160; </div>
        </div>
      </div>
{include file="admin/includes/footer.tpl"}