<?php

$host='localhost';
$user='root';
$pass='';
$db='payitforward';
/*//connect to mySQL database
$db_connect = mysqli_connect($host, $user, $pass, $db);
$dbi=mysqli_select_db($db_connect, $db);
//create a query and run it
$sql = 'select * from students where course_id = 1';
$result = mysqli_query($dbi, $sql);
//load the query result as an array
$data = mysqli_fetch_assoc($result);
//Let's see the data
var_dump($data);
*/

$sql = 'select * from students where course_id = 1';

$db_instance = mysqli_connect($host, $user, $pass, $db);
$result = mysqli_query($db_instance, $sql);
while ( $data = mysqli_fetch_assoc($result)) {
	//var_dump($result);
echo "<pre>";

	foreach ($data as $key => $value) {
		print $value . ' ';
	}
	echo "</pre>";

}

?>