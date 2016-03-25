<?php
//printarea meniului prin parcurgerea vectorului si returnand $menu_html o variabila cu valoarea scrisa a meniului
$menu_html='';
foreach ($pages as $page) {
	$menu_html .= "<a href='?page=".$page['url'] ."'>".$page['name']."</a>";
}
return $menu_html;
