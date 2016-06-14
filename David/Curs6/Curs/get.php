<?php
session_start();

if (isset($_GET['name'])) {
	$_SESSION['name']=$_GET['name'];
}
print $_SESSION['name'];
?>