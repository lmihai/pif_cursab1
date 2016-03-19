<?php
$menu_html = '';
foreach ($pages as $page) {
	//$page  = each page in $pages array ($key is not used here, we only need the content info)
	$menu_html .= "<a href='?page=" . $page['url'] . "'>" . $page['name'] . "<a/>";

}
return $menu_html;