<?php 
//Afisare Pay Forward:
// Multiplu de 3 Pay
//Multiplu de 5 Forward
// Multiplu de 3 si 5 PayForward
//Numerele de la 1-100

for ($i=1; $i < 100 ; $i++) { 
	if ($i % 3 == 0) {print ' Pay';};
	if ($i % 5 == 0) {print ' Forward';};
	if (($i % 3 != 0)&&($i % 5 != 0)){print ' '.$i;};
};
//Puteam sa fac programul si cu if-else dar nu am mai avut chef :)
?>