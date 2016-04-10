<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
print ("Survey taken by <br/>");
	if (isset($_POST["name"]))
	{
		print ($_POST["name"] . " ");
		print ("<br/>");
	}
	else{
		print ("Anonymous");
	}
	if (isset($_POST["email"]))
	{
		print ($_POST["email"] );
		print ("<br/>");
	}
	else{
		print (" No email");
	}

include "Survey1.php";
include "Survey2.php";
include "Survey3.php";
?>


<form name="back" method="post" action="survey.php">
<input type="submit" name="Back" value="Back"></input>  
</form>
</body>
</html>