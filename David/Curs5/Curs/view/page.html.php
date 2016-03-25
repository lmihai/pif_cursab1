<?php
//var_dump($page);
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php print($page['name']);?></title>
</head>
<body>
<?php print $menu; ?>
<h1><?php print($page['name']);?></h1>
<div>
	<?php print($page['content']);?>
</div>
	<?php include 'form.html.php' ?>
</body>
</html>