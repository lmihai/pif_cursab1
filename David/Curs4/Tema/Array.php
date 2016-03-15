<?php 
//suma primilor 2 vectori 
$Vect1 = array(0,1,2,3,4,5);
$Vect2 = array(0,1,2,3,4,5);

$Sum = array();

for ($i=0; $i < count($Vect2); $i++) { 
	$Sum[$i] = $Vect2[$i]+$Vect1[$i];
}

print_r($Sum);
?>