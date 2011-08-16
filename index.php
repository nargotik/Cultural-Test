<?php
require('site_init.php');


/*Assign links and titles to layout*/
$sql = "SELECT slugs.*,pages.* FROM slugs,pages WHERE module = 'page' AND lg='$lg' AND slugs.id=pages.id";
$result = mysql_query($sql);
while ($row = mysql_fetch_assoc($result)) {
	$id = $row['id'];
	$_title=unserialize($row[title]);
	$title = $_title[$lg];
	$data[link][$id][title]=$title;
	$data[link][$id][url]=$row['slug'];
}
$smarty->assign($data); /*Assign links and titles to layout*/
unset($data);


if ($request_slug == "") { /*Home Page*/
	$module = "page";
	$id = "home";
} elseif ($request_slug == "blogs") {
	$module = "blogs_index";
	$id = "blogs";
} else {

	$sql = "SELECT * FROM slugs WHERE lg='$lg' AND slug='$request_slug'AND sub_slug='$request_sub_slug'";	
	$result = mysql_query($sql);
	$row = mysql_fetch_assoc($result);
	$module = $row['module'];
	$id = $row['id'];
}

$cache_id = "$lg|$request_sub_slug|$request_slug";

if ($module=='') {
	header("HTTP/1.1 404 Not Found");
	$module = "page";
	$id = "404";
}


if ($module == "page" || $module == "blogs_index") {
	$sql = "SELECT * FROM pages WHERE id='$id'";
	$result = mysql_query($sql);
	$row = mysql_fetch_assoc($result);
	$_tit = unserialize($row['title']);
	$_text = unserialize($row['text']);
	$data['tit'] = $_tit[$lg];
	$data['text'] = $_text[$lg];
	$smarty->assign('title', $data['tit'] . " | " . $site_name);
	$smarty->assign($data);
	if ($module == "page") {
		$smarty->display('page.tpl',$cache_id);
		exit;
	}
}

/*Get Bloggers List RANDOM 4*/
$sql = "SELECT users.*,slugs.* FROM users,slugs WHERE users.priv='poster' AND users.username=slugs.id AND slugs.lg='$lg' ORDER BY RAND()";
$result = mysql_query($sql);
$r = 0;unset($_data);
while ($row = mysql_fetch_assoc($result)) {
	$r++;
	$_data['bloggers'][$r]['slug'] = $row['slug'];
	$_data['bloggers'][$r]['head'] = $row['head'];
	$_data['bloggers'][$r]['name'] = $row['name'];
}
$smarty->assign($_data);
unset($_data);

if($module == 'blogs_index') {

	$smarty->assign('title', $data['tit'] . " | " . $site_name);
	$smarty->display('blogs_index.tpl',$cache_id);
	
	
	
	
	
	
	
	
	
	
} elseif($module == 'blogs') {
	if($smarty->isCached('blog.tpl',$cache_id)) {
		$smarty->display('blog.tpl',$cache_id);exit;
	}
	$sql = "SELECT posts.*,slugs.* FROM posts,slugs WHERE posts.user='$id' AND posts.id=slugs.id AND slugs.lg='$lg' AND slugs.module='post' ORDER BY date_created ASC";
	$result = mysql_query($sql);
	while ($row = mysql_fetch_assoc($result)) {
		$r++;
		$_tit = unserialize($row['title']);
		$_text = unserialize($row['text']);
		$data['tit'] = $_tit[$lg];
		$data['text'] = $_text[$lg];
		$_data['posts'][$r]['title'] = $_tit[$lg];
		$_data['posts'][$r]['text'] = $_text[$lg];
		$_data['posts'][$r]['slug'] = $row['slug'];
		$_data['posts'][$r]['sub_slug'] = $row['sub_slug'];
		$_data['posts'][$r]['date_created'] = $row['date_created'];
	}
	
	$sql = "SELECT * FROM users WHERE username='$id'";
	
	$result = mysql_query($sql);
	$row = mysql_fetch_assoc($result);
	$_data['userdetails']['img'] = $row['image'];
	$_data['userdetails']['name'] = $row['name'];
	$_data['userdetails']['from'] = $row['from'];
	$_data['userdetails']['in'] = $row['in'];
	$_data['userdetails']['location'] = strtolower($row['location']);
	$_data['userdetails']['aupairloc'] = strtolower($row['aupairloc']);
	
	$smarty->assign($_data);
	
	$smarty->assign('title', $_data['userdetails']['name'] . " Posts | " . $site_name);
	$smarty->assign('tit', $_data['userdetails']['name'] . "'s Blog");
	$smarty->display('blog.tpl',$cache_id);
	
	unset($_data);
	
	
	
	
	
	
	
} elseif($module == 'post') {
	if($smarty->isCached('post.tpl',$cache_id)) {
		$smarty->display('post.tpl',$cache_id);exit;
	}
	$sql = "SELECT posts.*,slugs.* FROM posts,slugs WHERE posts.id='$id' AND posts.id=slugs.id AND slugs.lg='$lg' AND slugs.module='post' ORDER BY date_created ASC";
	$result = mysql_query($sql);
	$row = mysql_fetch_assoc($result);
	$_tit = unserialize($row['title']);
	$_text = unserialize($row['text']);
	$data['tit'] = $_tit[$lg];
	$data['text'] = $_text[$lg];
	$data['slug'] = $row['slug'];
	$data['sub_slug'] = $row['sub_slug'];
	$smarty->assign('title', $data['tit'] . " | " . $site_name);
	$smarty->assign('tit', $data['tit']);
	$smarty->assign($data);
	$smarty->display('post.tpl',$cache_id);
}




?>