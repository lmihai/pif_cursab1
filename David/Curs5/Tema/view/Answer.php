<?php
//display on the seconday page, related to Submit button
print "Your name : ".$_POST['Name']."  =>  Your E-mail: ".$_POST['Email'];
//checking user's choice from the first part of the program
include '../Controller/Part1.php';

print "<br/> You have chosen:<br/>".$a;
print "Calitate: ".$_POST['Calitate'];
print "<br/>Aspect: ".$_POST['Calitate2'];
print "<a href= 'Home.html.php'><br/>Test Again?</a>";
?>