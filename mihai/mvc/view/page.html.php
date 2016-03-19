<?php

//var_dump($page);
?>

<html>
    <head>
        <title>
            <?php print($page['name']); ?>
        </title>
    </head>
    <body>
        <?php print $menu; ?>
        <h1><?php print ($page['name']); ?></h1>
        <div><?php print ($page['content']); ?></div>
    </body>
</html>