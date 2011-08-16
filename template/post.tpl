{include file="include/header.tpl"}
	<div id="header2">
		<!--Div with text over image-->
		<div id='over_image'><span>{$tit}</span></div>
	</div>
	<div id='menu_head'>
		{assign var=i value="0"}
		{foreach from=$bloggers key=k item=v}
			{assign var=i value=$i+1}
			{if $i <= 5}
			<div class='heads head_{$v.slug}'><a href='{$lg_url}/{$v.slug}' class='imgHoverable'  id='head_{$v.slug}'><img src='/img/heads/{$v.head}' id='head_{$v.slug}_img' alt='' /><br />{$v.name}</a></div>
		
			{/if}

			{/foreach}

	</div>
	<div id="main">
	
	<a href='{$lg_url}/{$slug}/{$sub_slug}' class='link_blog post' ><br/>{$tit}</a><br />
		<iframe src="http://www.facebook.com/plugins/like.php?app_id=264160440263377&amp;href={$site_url}{$lg_url}/{$v.slug}/{$v.sub_slug}&amp;send=false&amp;layout=button_count&amp;width=450&amp;show_faces=true&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:21px;"></iframe>
		<br />
	{$text}
<a href='{$lg_url}/{$slug}' class='link_blog' ><br/>Back</a>
	</div>
{include file="include/footer.tpl"}