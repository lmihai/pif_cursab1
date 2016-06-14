<!DOCTYPE html>
<html>
<head>
	<title>Form</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<link rel="stylesheet" type="text/css" href="../../David/Curs5/Tema/view/Design.css" />
</head>
<body>
<div  id="asd">
<div class="container Border">
	<form name="Form1" method="post" action="?action=processForm">
	<div class="row">
		<div class="col-lg-6">
		<hr>Name (optional) <br/><input type="text" name="Name"></input>
		</div>
		<div class="col-lg-6">
		<hr>Email (optional) <br/><input type="text" name="Email" ></input>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-4"><hr>I Bought: <br/>
			<input type="checkbox" name="Break" value="Break" >Breakfast Food<br/>
			<input type="checkbox" name="Baked" value="Baked" >Baked Goods<br/>
			<input type="checkbox" name="Cake" value="Cake" >Cake<br/>
			<input type="checkbox" name="Beverage" value="Beverage" >Beverage<br/>
		</div>
	
		<div class="col-lg-4"><hr>It Tasted: <br/>
			<input type="radio" name="Calitate" value="Excelent">Excelent<br/>
			<input type="radio" name="Calitate" value="Good">Good<br/>
			<input type="radio" name="Calitate" value="Neutral">Neutral<br/>
			<input type="radio" name="Calitate" value="Bad">Bad<br/>
			<input type="radio" name="Calitate" value="Horible">Horible<br/>
		</div>
		<div class="col-lg-4"><hr>Aspect: <br/>
			<input type="radio" name="Calitate2" value="Excelent">Excelent<br/>
			<input type="radio" name="Calitate2" value="Good">Good<br/>
			<input type="radio" name="Calitate2" value="Neutral">Neutral<br/>
			<input type="radio" name="Calitate2" value="Bad">Bad<br/>
			<input type="radio" name="Calitate2" value="Horible">Horible<br/>
		</div>
	</div>
	<div class="row">
	 	<div class="col-lg-12" id="submit">
			<hr><input class="Blue" type ='submit' name='Submit' value='Send Survey'>
		</div>
	</div>
	</form>
</div>
</div>
</body>
</html>