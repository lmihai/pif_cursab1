<?php
//include 'menu.php';

//$menu = get_menu_with_template($pages, array());

if(isset($_GET['page'])){
	$page_name = $_GET['page'];
	foreach ($pages as $key => $page){
		if($page['url'] == $page_name){
			/*if ($page_name == 'home') {
				$content ="Bun Venit Acasa";
				$tpl = '/view/page.html.php';
			}
*/
			if ($page_name == 'home') {
				$tpl = '/view/home.html.php';
			}else
			if ($page_name == 'service') {
				$tpl = '/view/home.html.php';
			}else
			if ($page_name == 'blog') {
				$tpl = '/view/home.html.php';
			}else
			if ($page_name == 'contact') {
				$tpl = '/view/home.html.php';
			}else $tpl = '/view/404.php';
			
		ob_start();
		include dirname(__DIR__) . $tpl;
		return ob_get_contents();
		}
			//load page template
		

	}
	
}else{
	ob_start();
	include dirname(__DIR__) . "/view/404.php";
	return ob_get_contents();	
}
