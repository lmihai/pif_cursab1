<html>
<head>
<title>
Tema curs 5
</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

</head>

<body>
<div class="row">
<div class="col-md-6">
	<form name="form1" method="post" action="">
		<input type=”text” name=”textfield” value=”MyName”>
		<br/>
		<textarea rows="4" cols="50" name="textarea">This is the text in the textarea</textarea>
		<br/>
		<input type=”submit” name=”submit1” value=”Send”>
	</form>
</div>
<!--<div class="col-md-6">
<?php
	if(isset($_POST["textfield"])){
	print $_POST["textfield"];
	}
	else{
	print ("textfield value not found");
	}
	print("<br/>");
	if (isset ($_POST["textarea"])){
	print $_POST["textarea"];
	}
	else{
	print("textarea is not set");
	}
?>
</div>-->
</div>

<form action="#" method="post">
<select name="Color">
<option value="Red">Red</option>
<option value="Green">Green</option>
<option value="Blue">Blue</option>
<option value="Pink">Pink</option>
<option value="Yellow">Yellow</option>
</select>
<input type="submit" name="submit" value="Get Selected Values" />
</form>
<?php
if(isset($_POST['submit'])){
$selected_val = $_POST['Color'];  // Storing Selected Value In Variable
echo "You have selected :" .$selected_val;  // Displaying Selected Value
}
?>

<form action="" method="post">
<input type="radio" name="radio" value="Radio 1">Radio 1
<input type="radio" name="radio" value="Radio 2">Radio 2
<input type="radio" name="radio" value="Radio 3">Radio 3
<input type="submit" name="submit" value="Get Selected Values" />
</form>
<?php
if (isset($_POST['submit'])) {
if(isset($_POST['radio']))
{
echo "You have selected :".$_POST['radio'];  //  Displaying Selected Value
}
?>
</body>
</html>