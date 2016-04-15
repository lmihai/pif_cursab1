<?php
	include "DB_Validate.php";
	if (isset($_POST["username"]) && isset($_POST["password"])){
		var_dump($_POST["username"]);
		userLogin($_POST["username"], $_POST["password"]);
		if (isset($_SESSION["user"])){
			print('<br>');
			print("You are logged in!");
			print('<br>');
			}
		else{
			print('<br>');
			print("<a href='?login.php'</a>");
			print('<br/>');
		}
	}
	else{
		print("Username or password is not valid!");
	}

	
	print ("<br/>");

