<?php

//var_dump($page);
?>

<html>
<head>
<!--<title> TITLE GOES HERE </title>-->
<?php print($page['name']); ?>
</head>
<body>
	
	<?php print $menu; ?>

	<h1><?php print ($page['name']); ?></h1>>
	<div><?php print ($page['content']); ?></div>
</body>

</html>