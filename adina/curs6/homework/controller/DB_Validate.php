<?php
function userLogin($username, $password){
$host='localhost';
$user='root';
$pass='';
$db='testsampledb';

session_start();
$sql = 'select id, password from users where username = ' . $username;

$db_instance = mysqli_connect($host, $user, $pass, $db);
$result = mysqli_query($db_instance, $sql);


while ( $data = mysqli_fetch_assoc($result)) {
	//var_dump($result);
	//foreach ($data as $key => $value) {
		if(MD5($password)===$data["password"]){
			$_SESSION["user"] = $data["id"];
			//print ("Welcome!");

		}
		else{
			//print ("Password is not valid!")''
		}
	//}

}
}

