<?php
	//setcookie("friend", "yes", time() +3600);
//to "delete" a cookie, put a negative timespan
//setcookie("friend", "yes", time() -3600);


if (isset($_COOKIE["test"])) {  
	$cookieValue = $_COOKIE["test"];
switch ($cookieValue) {
	case '1':{
		setcookie("test", "2", time() + 3600);
		print "Hello";
		break;
	}
	case '2':{
		setcookie("test", "3", time() + 3600);
		print "Hello again!";
		break;
	}
	case '3':{
		setcookie("test", "1", time() + 3600);
		print "Goodbye";
		break;
	}
}
}
else{
	setcookie ("test", "1", time() + 3600);
	print "Hello";
}


?>