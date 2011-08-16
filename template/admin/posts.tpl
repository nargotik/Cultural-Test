{include file="admin/includes/header.tpl"}
	<div id="title">
        <h2>Admin » Posts for user {$user}</h2>
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

			<a href="post.php?user={$user}">Add Post</a><br/><br/>
			
			<table id="noticias" cellspacing="0" cellpadding="2" class="uploadedpics full">
				<tr class="nodrop nodrag">
					<th>Title</th>
					<th>Date Created</th>
					<th width="60px"></th>
				</tr>
				{*$conteudo|@debug_print_var*} 
				 {section name=record loop=$conteudo}
				    <tr id='{$conteudo[record].id}'>
				    	<td>{$conteudo[record].title}</td>
				    	<td>{$conteudo[record].date_created}</td>
				    	<td>
				    	<a href='javascript:' class='btn_del' rel='{$conteudo[record].id}' ><img src='/img/cancel.png' /></a>
				    	&nbsp;&nbsp;&nbsp;
				    	<a href='post.php?id={$conteudo[record].id}&user={$conteudo[record].user}' ><img src='/img/edit.png' /></a>
				    	</td>

				    </tr>
				 {sectionelse}
				 <tr class="nodrop nodrag">
				 	<td colspan="5">There are no posts for this user</td>
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
		  apprise('Really want to delete this post?', {'verify':true}, function(r)
				    {
				    if(r)
				        {
				        // user clicked 'Yes'
						$('#'+laye).fadeOut(500, function() {  $('#'+$(this).attr('rel')).remove(); });
						$('#AjaxResult').show();
						$('#AjaxResult').load("post_delete.php?id="+laye);     
						
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