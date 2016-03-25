<!DOCTYPE html>
<html>
<head>
	<title>	A BASIC HTML FORM</title>
</head>
<body>
	<form name="form1" method="post" action="output.php">
		
		<input type ="text" name="myName" value= 'MyName'>
		<br/>
		<textarea name="myTextArea" value="Text"></textarea>
		
		<label> TEXT:
			<select name="Select">
				<option>Yes</option>
				<option>No</option>
				<option>Maybe</option>
			</select>
		</label> 

		<input type ='submit' name='submit1' value='Send'>
	</form>
	
	<br/>
		
	<hr>
	<?php //include 'tema_forms_controler.php';	?>
</body>
</html>