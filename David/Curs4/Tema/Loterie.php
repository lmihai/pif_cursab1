<?php 
//Numerele alese de 3 persoane pentru loterie
//Nested Arrays
//
$Loterie = array(
		array('Nume' => 'John' , 
			  'Prenume'=>'Doe' , 
			  'Numere'=>array(1,2,3,4,5,6) 
			  ) ,
		array('Nume' => 'Jane' , 
			  'Prenume'=>'Foo' , 
			  'Numere'=>array(1,2,3,4,5,6) 
			  ) ,
		array('Nume' => 'Elvis' , 
			  'Prenume'=>'Peanut' , 
			  'Numere'=>array(1,2,3,4,5,6) 
			  )

	);
//afisarea intregului vector
print_r($Loterie);

//afisarea de pe poz 2 -> poz. Numarul ->poz. 2, adica 3!
print('</br>'.$Loterie[1]['Numere'][2]);
print('<hr>');

//adaugarea in a 3-a categorie a numarului 7 la restul numerelor
$Loterie[2]['Numere'][]=7;

//afisarea Ultimului numar introdus
Print $Loterie[2]['Numere'][6];

?>