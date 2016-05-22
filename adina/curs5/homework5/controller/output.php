<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
		if(isset($_POST["textfield"])){
		print ("Hello. my name is ");
		print $_POST["textfield"];
		}
		else{
		print ("textfield value not found");
		}
		print("<br/>");
		if (isset ($_POST["textarea"])){
			print (" and I just submitted ");
		print $_POST["textarea"];
		}
		else{
		print("textarea is not set");
		}
		if(isset($_POST["Color"])){
			print (" with option ");
			print ($_POST["Color"]);
		}
		else{
			print ("Color is not set!");
		}
	?>
</body>
</html>