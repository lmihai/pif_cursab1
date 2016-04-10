<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
<?php
	if (isset($_POST["username"])){
		print("User " . $_POST["username"] . "is logged in");
	}
	else{
		print("username input text is not defined");
	}

	if(isset($_POST["password"])){
		print (" and his password is " . $_POST["password"]);
	}
	else{
		print ("the password text is not set!!!");
		
	}
	print ("<br/>");
	if(isset($_POST["rememberUser"])){
		print("We will remember you on this computer");
	}
	else{
		print("We won't remember you on this computer!");
	}
?>
<form name="takeSurvey" method="post" action="survey.php">
<input type="submit" name="GoToSurvey" value="Go to survey"></input>  
</form>

</body>
</html>