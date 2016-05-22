<?php
function get_menu($pages, $exclude = array())
{
    $menu_html = '';
    foreach ($pages as $page) {
        if (!in_array($page['url'], $exclude)) {
            //$page  = each page in $pages array ($key is not used here, we only need the content info)
            $menu_html .= "<a href='?page=" . $page['url'] . "'>" . $page['name'] . "<a/> ";
        }
    }
    return $menu_html;
}

function get_menu_with_template($pages, $exclude = array())
{
    // We need to build an array of
    // pairs:
    // @link_url
    // @link_name
	$menu_elements = array();
    foreach ($pages as $page) {
        if (!in_array($page['url'], $exclude)) {
            //verifica daca exista url-ul in vectorul exclude care este parametru
            //$page  = each page in $pages array ($key is not used here, we only need the content info)
            $menu_elements[] = array(
                'link_url' => $page['url'],
                'link_name' => $page['name']
            );
        }
    }
    
    //load page template
    ob_start();
    include dirname(__DIR__) . "/view/menu.html.php";
    $html = ob_get_contents();

    // We need this to ensure we do not print data yet :) - try commenting it out and see what happens
    ob_end_clean();

    return $html;
}