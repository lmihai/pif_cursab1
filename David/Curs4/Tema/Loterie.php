<?php 
//Numerele alese de 3 persoane pentru loterie
//Nested Arrays
//Stiu ca am incurcat numele cu prenumele dar Laziness Rules!!
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

//Anularea Biletului NR 2
unset($Loterie[1]['Numere']);


//Afisarea Numelui si Numarul Numerelor alese
// @ inaintea unei functii ignora orice tip de eroare :) Long live Google! 
for ($i=0; $i < count($Loterie) ; $i++) { 

	@Print ('</br>'.$Loterie[$i]['Nume'].' '.count($Loterie[$i]['Numere']));
}

//Suma tuturor numerelor de pe bilete
for ($i=0; $i < count($Loterie) ; $i++) { 

	for ($j=0; $j < @count($Loterie[$i]['Numere']); $j++) { 
		@$sum += $Loterie[$i]['Numere'][$j];
	}
}
// Afisarea sumei obtinute
Print '</br> Suma : '.$sum;

//cel mai mare numar
$max=0;
for ($i=0; $i < count($Loterie) ; $i++) { 

	for ($j=0; $j < @count($Loterie[$i]['Numere']); $j++) { 
		if ($max < $Loterie[$i]['Numere'][$j]) $max= $Loterie[$i]['Numere'][$j]; 
	}
}
Print '</br> Cel mai mare: '.$max;



?>