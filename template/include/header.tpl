<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<title>{$title}</title>
<link rel="stylesheet" type="text/css" href="/css/style.css" />
<script type="text/javascript" src="/js/jquery.js"></script>
<script type="text/javascript" src="/js/site.js"></script>
</head>

<body>
<div id="background-wrap">
	<img src="/img/bg.jpg" alt='' />
</div>
<div id="top_men">

	<div id="inner_top">	
	

	<ul>
		<li><a href='#' style='margin-top:-35px;'><img src='/img/ef_logo.png' alt='' /></a></li>
		<li><a href='/' class='link'><img src='/img/home.png' alt='' />&nbsp;{$link.home.title}</a></li>
		<li><a href='#'><img src='/img/search.png' alt='' />&nbsp;Browse All EF Programs</a></li>
		<li><a href='{$lg_url}/{$link.aboutus.url}' class='link'><img src='/img/info.png' alt='' />&nbsp;{$link.aboutus.title}</a></li>
		<li><a href='{$lg_url}/{$link.contactus.url}' class='link'><img src='/img/contact.png' alt='' />&nbsp;{$link.contactus.title}</a></li>
	</ul>		<div id="languages">
		{foreach from=$linguas key=k item=v}
	 	  <a href="{if $k eq 0}/{else}/{$v}/{/if}">{$v}</a>
		{/foreach}

	</div>
	</div>

</div>

<div id="wrapper">

	<div id="header">
		<div id='logo'><img src='/img/cultural_logo.png' alt='Cultural Care Au Pair' /></div>
		<div id='text'>Work as an Au Pair in<br />USA or Australia</div>
		<div id='links'>

				<img alt="" src="/img/bullet_grey.png" />&nbsp;+41 417 46 68<br/>
				<img alt="" src="/img/bullet_pink.png" />&nbsp;<a href='{$lg_url}/{$link.freebrochure.url}' class='link'>{$link.freebrochure.title}</a><br/>
				<img alt="" src="/img/bullet_pink.png" />&nbsp;<a href='{$lg_url}/{$link.applynow.url}' class='link'>{$link.applynow.title}</a><br/>

		</div>
	</div>
	
	<div id="nav">
		<ul>
			<li><a href='{$lg_url}/{$link.overview.url}' class='link'>{$link.overview.title}</a></li>
			<li><a href='{$lg_url}/blogs' class='link'>{$link.blogs.title}</a></li>
			<li><a href='{$lg_url}/{$link.information.url}' class='link'>{$link.information.title}</a></li>
			<li><a href='{$lg_url}/{$link.aboutus.url}' class='link'>{$link.aboutus.title}</a></li>
		</ul>
	</div>
	<div id="main_in">

	