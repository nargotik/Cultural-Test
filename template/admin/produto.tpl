{include file="admin/includes/cabecalho.tpl"}
	<div id="title">
        <h2>Admin » Login</h2>
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
			    <legend>Imagens do Produto</legend>
			    
						<div id="fileQueue_{$lingua}" class="fileQueue"></div>
						<div id="fileup_{$lingua}">
						<input type="file" name="uploadify_{$lingua}" id="uploadify_{$lingua}" />
						</div>

						<table id="uploadedpics_{$lingua}" cellspacing="0" cellpadding="2" class="uploadedpics full">
							<tr class="nodrop nodrag">
								<th width="40px"></th>
								<th>Descrição</th>
								<th width="20px"></th>
							</tr>
							
							{foreach from=$imagens[$lingua] key=k item=imagem}
							<tr id='{$imagem.img|replace:'.':''}'><td><input type='hidden' name='imgs_{$lingua}[]' value='{$imagem.img}'/><a href='/media/produtos/{$imagem.img}' class='group'><img src='/img/prod/img_peq/{$imagem.img}' /></a></td> <td class='type-text full'><input type='text' name='imgs_{$lingua}_desc[]' value='{$imagem.desc}' style='width:95%' /></td>  <td align='right'><a href='javascript:' class='btn_del' rel='{$imagem.img}' ><img src='/img/cancel.png' /></a></td></tr>
							{/foreach}
							
						</table>
						
						{if $site_fundo}<script type="text/javascript">
						{literal}$(document).ready(function() {{/literal}
						wrt_uploadify('{$site_fundo}','#uploadedpics','#fileup','link_sitefundo');
						{literal}});{/literal}
						</script>{/if}
			  </fieldset>
			  
			  <fieldset>
			    <legend>Produto</legend>
			    <div class="type-text {if $titulo_error neq ""} error" role="alert" aria-live="assertive{/if}">
			    {if $titulo_error neq ""}<strong class="message">{$titulo_error}</strong>{/if}
				  <label for="tit_{$lingua}">Titulo</label>
				  <input type="text" name="tit_{$lingua}" id="tit_{$lingua}" size="20" value="{$tit.$lingua}" />
				</div>
				<div class="type-text">
				<label for="texto_{$lingua}">Descrição</label>
				{fckeditor BasePath="/admin/editor/" InstanceName="texto_$lingua" Width="100%" Height="500px" ToolbarSet='Default' Value=$texto.$lingua} 
				</div>
			  </fieldset>
			  <fieldset>
			    <legend>Optimização Para Motores de busca</legend>
				<div class="type-text">
				  <label for="seo_desc_{$lingua}">Descrição</label>
				  <input type="text" name="seo_desc_{$lingua}" id="seo_desc_{$lingua}" size="20" value="{$seo_desc.$lingua}" />
				</div>
			  </fieldset>


	          </div>
	          {/foreach}

	         </div>
	         <div class="type-button">
	         <input type="hidden" name="edita_grava" value="1" />
              		<input type="submit" value="Gravar"  class="reset" id="submit" name="submit" />
	         </div>
{literal}
<script type="text/javascript">
$(function() {
	$("#tabs").tabs();
});
$(document).ready(function() {
	{/literal}
	{foreach from=$linguas key=k item=lingua}

	$("#uploadify_{$lingua}").{literal}uploadify({{/literal}
		'uploader'       : '/js/upload/uploadify.swf',
		'script'         : '/{$lingua}/admin/upload.php?tipo=catalogo&{$sess_name}={$sess}',
		'scriptData'     : {literal}{{/literal}'{$sess_name}' : '{$sess}'{literal}}{/literal},
		'cancelImg'      : '/js/upload/cancel.png', /*/js/upload/cancel.png*/
		'folder'         : 'uploads_{$lingua}',
		'queueID'        : 'fileQueue_{$lingua}',
		'auto'           : true,
		'multi'          : true,
		'fileDesc'		 : 'Imagens',
		'fileExt'		 : '*.jpg;*.jpeg;*.png;*.gif;*.bmp', 
		{literal}onComplete: function (evt, queueID, fileObj, response, data) {{/literal}
         	wrt_catalogo(response,'#uploadedpics_{$lingua}',"{$lingua}");
      	{literal}},
	});
	{/literal}
	
	$("#uploadedpics_{$lingua}").tableDnD();
	{/foreach}

	{literal}
	$(".btn_del").click(function () { 
      wrt_gallery_del($(this).attr('rel'));
      
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
{include file="admin/includes/rodape.tpl"}