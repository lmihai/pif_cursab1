<?php
//$_GET['page'] va contine numele paginii pe care vrem sa o primim
include 'menu.php';
if(isset($_GET['page'])) {
	//define menu variable here
	$menu = get_menu_with_template($pages, array('despre-noi'));
	$page_name = $_GET['page'];
	foreach ($pages as $key => $page){
		if($page['url'] == $page_name){

			//load page template
			ob_start();
			include dirname(__DIR__) . "/view/page.html.php";
			return ob_get_contents();
		}
	}
}

//nu se inchide php la final de fisier, pentru ca e inclus in index.php