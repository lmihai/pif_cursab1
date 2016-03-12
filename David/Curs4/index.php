<?php
# Suma de la 1 la 1000 
$sum=0;
for ($i=0; $i <1000 ; $i++) { 
	$sum+=$i;
}
print($sum);

#Reinitializarea sumei si calcularea suma valorilor pare

$sum=0;
for ($i=0; $i < 1200; $i++) { 
	if ($i%2==0) {
		$sum+=$i;
	}
}
print('</br>'.$sum);

?>