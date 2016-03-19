<?php
$menu_html='';
foreach ($pages as $page) {
	$menu_html .= "<a href='?page=".$page['url'] ."'>".$page['name']."</a>";
}
return $menu_html;