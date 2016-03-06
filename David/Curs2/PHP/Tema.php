<html>
<head>
	<link rel="stylesheet" type="text/css" href="../CSS/tema.css">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<?php
	for($i=1;$i<=20;$i++){ /*am adaugat id si clasa dupa cum se cerea dar am stilizat numai clasa even resp. odd*/
		if ($i %2==0) {
			print("<p id=\"$i\" class=\"even\" class=\"number\">$i</p>");
		} else {
			print("<p id=\"$i\" class=\"odd\" class=\"number\">$i</p>");
		}
	};

	?>

</body>
</html>