<html>
<head>
<title>
Curs 4
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
<!--import css style-->
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>
body>
<div class="row">
<div class="col-md-4">
<?php
	$sum_even = 0;
	$sum_odd = 0;
	$sum = 0;
	$product = 1;
	$max = 0;
	$lotto_players = array(
		"John Doe" => array 
							( 'lotto_numbers' =>array ('1', '2', '3', '4', '5', '6') ,
								'first_name' => 'John')  ,
		"Jane Foo" => array 
							( 'lotto_numbers' => array ('7', '8', '9', '10', '11', '12'), 
								'first_name' => 'Jane')  ,
		"Elvis Peanutbutter" => array 
								( 'lotto_numbers' => array ('17', '18', '13', '14', '15', '16') ,
								'first_name' => 'Elvis')  ,

		);
	$numbers_array = array(2, 3, 1, 5, 4);
	$array1 = array(1,2,3,4,5,6,7,8,9,10);
	$array2 = array(11,12,13,14,15,16,17,18,19,20);
	$array_sum = array();
?>
<!-- arrays -->
For loop exercises
<br/>
Sum of all even numbers from 0 to 1200:

<?php
for($i=0; $i<=1200; $i++)
{
	if ($i % 2 == 0)
	{
		$sum_even+=$i;
	}
}
print($sum_even);
?>
<br/>
Sum of all odd numbers from 20 to 800:
<?php
for($i=20; $i<=800; $i++)
{
	if ($i % 2 != 0)
	{
		$sum_odd+=$i;
	}
}
print($sum_odd);
?>
<br/>

Sum of all numbers from 1000 to 1:
<?php
for($i=1000; $i>0; $i--)
{
	$sum+=$i;
}
print($sum);
?>
<br/>

Product of all numbers from -99 to 99:
<?php
	for($i=-99; $i<100; $i++)
	{
		$product *= $i;
	}
	print($product);
?>
<br/>
</div>
<div class="col-md-4">
	Array exercises
	Add number '7' to Elvis's list
	Remove Jane Foo's numbers
	<br/>
<?php
	$lotto_players["Elvis Peanutbutter"]['lotto_numbers'] = '7';

	unset($lotto_players["Jane Foo"]['lotto_numbers']);
?>
	<br/>
	Show the first name of each player and the number of lotto numbers selected

<?php
#for ($i=0; $i < count($lotto_players) ; $i++) 
foreach ($lotto_players as $key => $value) {
	# code...
}
{
	print($value['first_name'] . ' has selected ' . count($value['lotto_numbers']) . ' numbers');

}


?>
<br/>
	Sum of all numbers 

<?php
$sum = 0; // variable reuse
#for ($i=0; $i < count($lotto_players) ; $i++) 
foreach ($lotto_players as $key => $player_fields)
{
	#for($j=0; $j < count($value['lotto_numbers']); $j++)
	foreach ($player_fields['lotto_numbers'] as $key => $number)
	{
		$sum += $number; #value['lotto_numbers'][$j];
	}
	print($sum);
}
?>
<br/>
 Display the max. of all numbers on all tickets
<?php
for ($i=0; $i < count($lotto_players) ; $i++) 
{
	for($j=0; $j < count($lotto_players[$i]['lotto_numbers']); $j++)
	{
		if ($lotto_players[$i]['lotto_numbers'][$j] > $max)
		{
			$max = $lotto_players[$i]['lotto_numbers'][$j];
		}
	}
	print($max);
}
?>
</div>
<div class="col-md-4">
Some more array exercises
<br/>
 Write a program that prints the numbers
from 1 to 100. But for multiples of three print
"Pay" instead of the number and for the
multiples of five print “Forward”. For numbers
which are multiples of both three and five print
“PayForward”.
<?php
for ($i=1; $i <=100 ; $i++) 
{
	if(($i % 3 != 0) && ($i % 5 != 0))
	{
		print($i);
	}
	else
	{
		
		if($i % 3 == 0)
		{
			print("Pay");
		}
		if($i % 5 == 0)
		{
			print("Forward");
		}
	}
}
?>
<br/>
Write a program that orders ascendingly the
following array:
$array = array(2, 3, 1, 5, 4);
<?php

print_r($numbers_array);
?>
<br/>
8. Define two arrays with the same number of
elements, just numbers. Create
programmatically a third array, which holds on
each position the sum of the numbers from the
same position in the first two arrays. For
example, the first element in the third array is
the sum of first element of first array and the
first element of second array.
<?php
for ($i=0; $i <count($array1) ; $i++) 
{
	$array_sum[$i] = $array1[$i] + $array2[$i];
}
print_r($array_sum);
?>
</div>
</div>

</body>
</html>