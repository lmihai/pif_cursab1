<?php

$menu= include 'menu.php';
//var_dump($_GET['page']);
if(isset($_GET['page'])){
	$page_name= $_GET['page'];
	foreach ($pages as $key => $page) {
		if ($page['url']==$page_name) {

			ob_start();
			
			include dirname(__DIR__) . "/view/page.html.php";
			
			return ob_get_contents();
			
			//print $page['name'];
			//print "<br/>";
			//print $page['content'];
		}
	}
}else{

}
