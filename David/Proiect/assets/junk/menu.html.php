<?php
/**
 * Created by PhpStorm.
 * User: mihaidigitalrepublic
 * Date: 3/19/16
 * Time: 11:42 AM
 */

// We will recieve an array with the structure:
/*
 * array( array('link_url' => 'smth', 'link_name' => 'name') );
 *
 * And we iterate through it to render
 */

foreach ($menu_elements as $item) { ?>
    <a href="?page=<?php print $item['link_url']; ?>" > <?php print $item['link_name']; ?> </a> &nbsp;
<?php } ?>

