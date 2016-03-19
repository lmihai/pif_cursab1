<?php
print("David");
define('COURS',"asd");
print ("<br>".COURS);
$SS = 10;
print('<br>there are  $SS  count');
print("<br>there are  $SS  count");
print('<br>there are '. $SS .' count');

$students_in_the_room=13;
$students_not_present=2;
$students_in_other_courses=30;
$students_ceva="students in the php course";
$students_total="Total FastTrackIT students";

print("<br>".$students_ceva . ($students_not_present+$students_in_the_room));

?>