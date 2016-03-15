<?php 
$Vector = array(2, 3, 1, 5, 4);

for ($i=0; $i <count($Vector)-1 ; $i++) { 
	for ($j=$i; $j < count($Vector); $j++) { 
		if ($Vector[$i]>$Vector[$j]) {
			$aux=$Vector[$i];
			$Vector[$i]=$Vector[$j];
			$Vector[$j]=$aux;
		}
	}
}

print_r($Vector);
?>