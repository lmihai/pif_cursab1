<?php
if(!isset($_COOKIE['friend']))
setcookie('friend', 1 , time()+3600);
if ($_COOKIE['friend']==1) {
	echo "hello";
	$_COOKIE['friend']++;
	setcookie('friend', 2 , time()+3600);
}elseif ($_COOKIE['friend']==2) {
	echo "Hello Again";
	setcookie('friend', 3 , time()+3600);
}else{
	echo "Goodbye";
	setcookie('friend', 1 , time()+3600);}

?>