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
	{$text}
		{foreach from=$bloggers key=k item=v}


		<a href='{$lg_url}/{$v.slug}' class='link'  id='head_{$v.slug}'><br>{$v.name}</a>
	


		{/foreach}
	</div>
{include file="include/footer.tpl"}