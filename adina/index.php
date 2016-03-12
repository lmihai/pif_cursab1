<?php
$age_maria = 20;
$age_ana = 25;
$age_vlad = 17;
$age_ionescu = 25;
$age_george = 30;
if ($age_maria > $age_ana)
{
	print('Maria');
	print('<br/>');
}
else
{
	print('Ana');
	print('<br/>');
}
if ($age_vlad > $age_ionescu)
{
	print('Vlad');
	print('<br/>');
}
else
{
	print('Ionescu');
	print('<br/>');
}
if ($age_ionescu > $age_ana)
{
	print('Ionescu');
	print('<br/>');
}
else
{
	print('Ana');
	print('<br/>');
}
if ($age_george > $age_vlad)
{
	print('George');
	print('<br/>');
}
else
{
	print('Vlad');
	print('<br/>');
}

$a = true;
$b = false;
$c = 0;
$d = 1;

print('not(a) and(b) is ' );
var_dump(!$a && $b) ;
print('<br/>');
print(' a or b is ');
var_dump( $a || $b);
print('<br/>');
print('not(a or b) is ');
var_dump(!( $a || $b));
print('<br/>');
print('a === c is ');
var_dump(( $a === $c));
print('<br/>');
print('a and b or c is ');
var_dump($a && $b || $c);
print('<br/>');
print('not(c) == b is ');
var_dump( !$a == $b);
print('<br/>');
print('a == c is ');
var_dump( $a == $c);
print('<br/>');
print('not(b) === c is ');
 var_dump(!$b === $c);
print('<br/>');
print('a or not(b) is ');
var_dump( $a || !$b);
$x = 5;
$y = 6;
print('<br/>');
print('!(x>6) is ' );
var_dump(!$x > 6);
print('<br/>');
print('x == 6 && x == 5 is ');
var_dump($x == 6 && $x == 5);
print('<br/>');
print('x == 6 || x == 5 is ');
var_dump($x == 6 || $x == 5);
print('<br/>');
print('x > -1 && y < 10 ');
var_dump($x > -1 && $y < 10);
print('<br/>');

$a = 3;
$b = 21;
$c = 1;

if ($a < $b)
{
	if($a < $c)
	{
		print ($a . ' ');
		if ($b < $c)
		{
			print($b . ' ');
			print($c . ' ');
		}
		else
		{
			print($c . ' ');
			print($b . ' ');	
		}
	}
	else
	{
		print($c . ' ');
		print($a . ' ');
		print($b . ' ');
	}
}
else
{
	if($b<$c)
	{
		print($b . ' ');
		if($c < $a)
		{
			print($c . ' ');
			print($a . ' ');
		}
		else
		{
			print($a . ' ');
			print($c . ' ');	
		}
	}
	else
	{
		print($c . ' ');
		print($b . ' ');
		print($c . ' ');
	}
}

/*
print 'Adina';

$variable_def = 10;

define('CONSTANT_DEF', "abc");

$producer = "Ford";
$model = "Escort";

$myCar = $producer . $model;
$car = $producer . " " . $model;

print("My car is $car");


$count = 10;

print('There are $count students in the room today');
print("There are $count students in the room today");
print('There are ' . $count . ' students in the room today');



$students_in_the_room = 10;
$students_not_present = 5;
$students_in_other_courses = 20;
$students_php_course = 'Students in PHP course';
$students_total = 'Total students';

//$students_php_total = $students_in_the_room + $students_not_present;
//print($students_php_course . ' ' . $students_php_total);
print('<br/>');
print($students_php_course . ' ' . ($students_in_the_room + $students_not_present));
print('<br/>');
print ($students_total . ' ' . ($students_in_the_room + $students_not_present + $students_in_other_courses));
*/


?>