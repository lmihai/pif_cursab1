<!DOCTYPE html>
<html>
<head>
	<title>A simple login window </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<link rel="stylesheet" type="text/css" href="./model/style.css">
</head>
<body>

<div class="row">
	<div class="col-sm-4">
		
	</div>	

	<div class="col-sm-4 border background">
		<p><b> Login to Web App </b></p>
		<form name="form2" method="post" action="User.php">
			<br/>
			<input class="borderType backgroundColor" type="text" name="username" value="Username"></input>
			<br/>
			<br/>
			<input class="borderType backgroundColor" type="password" name="password" value="Password"></input>
			<br/>
			<input type="submit" name="login" value="Login"></input>
		</form>
	</div>
	<div class="col-sm-4">
	</div>
</div>

</body>
</html>