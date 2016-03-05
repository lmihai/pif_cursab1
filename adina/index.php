<?php
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

*/

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
?>