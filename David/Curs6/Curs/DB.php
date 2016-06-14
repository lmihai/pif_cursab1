<?php
$host='localhost';
$user='root';
$pass='';
$db='payitforward';

//$db_instance=new mysqli ($host, $user, $pass, $db);
//$db_instance=mysqli_select_db($db_connect,$db);
$db_instance=mysqli_connect($host, $user, $pass, $db);
$sql="SELECT * FROM students WHERE course_id = 0";

$result = mysqli_query($db_instance,$sql);


while ($data=mysqli_fetch_assoc($result)) {
	foreach ($data as $key => $value) {
		print $key . ' ->' . $value . "<br/>";
	}
	print "<hr/>";
}
?>