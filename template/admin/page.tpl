{include file="admin/includes/header.tpl"}
	<div id="title">
        <h2>Admin » {$title.$lg}</h2>
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

            <div id="tabs" class="ui-tabs">
				<ul class="ui-tabs-nav">
				    {foreach from=$linguas key=k item=lingua}
				    <li><a href="#lg-{$k}">{$linguas_desc.$k}</a></li>
					{/foreach}
				</ul>
				<div id="deleted_pics" style="display:none;"></div>
				{foreach from=$linguas key=k item=lingua}
				<div id="lg-{$k}">
				
			  <fieldset>
			    <legend>Page Editing</legend>
			    <div class="type-text">
				  <label for="title_{$lingua}">Title</label>
				  <input type="text" name="title_{$lingua}" id="title_{$lingua}" size="20" value="{$title.$lingua}" />
				</div>
				<div class="type-text">
				<label for="text_{$lingua}">Text</label>
				{fckeditor BasePath="/admin/editor/" InstanceName="text_$lingua" Width="100%" Height="500px" ToolbarSet='Default' Value=$text.$lingua} 
				</div>


			  </fieldset>
			  <fieldset>
			    <legend>SEO</legend>
				<div class="type-text">
				  <label for="seo_desc_{$lingua}">Description</label>
				  <input type="text" name="seo_desc_{$lingua}" id="seo_desc_{$lingua}" size="20" value="{$seo_desc.$lingua}" />
				</div>
			  </fieldset>


	          </div>
	          {/foreach}

	         </div>
	         
		
			
	         <div class="type-button">
	         <input type="hidden" name="edita_grava" value="1" />
              		<input type="submit" value="save"  class="reset" id="submit" name="submit" />
	         </div>
{literal}
<script type="text/javascript">

$(document).ready(function() {

$(function() {
	$("#tabs").tabs();
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