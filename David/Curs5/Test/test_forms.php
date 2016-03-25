<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<!--<form name="form1" method="get" action="">
		<INPUT TYPE='TEXT' VALUE="username"></INPUT>
		<input type="Submit" name="Submit" value="Login"></input>
	</form>
	<?php //$a=$_GET['Submit'];
	//print $a;
	?>-->

	<form name="form1" method="post" action="">
		<input type="text" name="form1" value="username"></input>
	</form>
	<form name="form1" method="post" action="">
		<input type="text" name="form2" value="username"></input>
		<input type="Submit" name="Submit" value="Login"></input>
	</form>
	
	<?php $a=$_POST['form1'];
	print $a;
	?>
	<!--<form name="form1" method="get" action="test_foreach.php">
		<INPUT TYPE='TEXT' VALUE="username"></INPUT>
		<input type="Submit" name="Submit" value="Login"></input>
	</form>
	<?php //$a=$_GET['Submit'];
	//print $a;
	?>
	<form name="form1" method="post" action="test_forms.php">
		<input type="text" value="username"></input>
		<input type="Submit" name="Submit" value="Login"></input>
	</form>
	<?php //$a=$_POST['Submit'];
	//print $a;
	?>-->
<?php

?>
</body>
</html>
