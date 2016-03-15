<!DOCTYPE html>
<html>
<head>
	<title>Movies</title>
</head>
<body>

<?php
	$movies_array = array(
		array('title'=>'Godfather', 'year'=>1972,'image'=>'Images/Godfather.png' ),
		array('title'=>'Pulp Fiction', 'year'=>1956,'image'=>'Images/Pulpfiction.jpg' ),
		array('title'=>'Life is Beautiful', 'year'=>1976,'image'=>'Images/Lifeisbeautiful.png' )
	);
//var_dump($movies_array);
//print_r($movies_array);
/*	for ($i=0; $i< count($movies_array) ; $i++) { 
		print($movies_array[$i]['title']);
		print('<br>');
		print("<img src='". $movies_array[$i]['image']. "'>");

	}*/
?>

<h3>Movie List</h3>

<?php
	/*for ($i=0; $i< count($movies_array) ; $i++) { 
		print("<a href= ' ".$movies_array[$i]['image']." '>".$movies_array[$i]['title']."</a>");
		print('<br>');
		print("<img src='". $movies_array[$i]['image']. "'>");
		print('<br>');

	}*/
	for ($i=0; $i<count($movies_array); $i++){

		print "<a href='?film_id=".$i."'>".$movies_array[$i]['title']."</a>";
		print"</br>";
	}


?>
<hr>
<?php 
	$film = $_GET['film_id'];
	print($movies_array[$film]['title']);
	print('</br>');
	print($movies_array[$film]['year']);
	print('</br>');
	print("<img src='".$movies_array[$film]['image']."'>");
	print('</br>');
?>

</body>
</html>