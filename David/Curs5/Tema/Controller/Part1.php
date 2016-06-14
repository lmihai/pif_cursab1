<?php
$my_choices='';
//legatura cu array-ul ce reprezinta alegerile utilizatorului
include '../model/Array.php';
foreach ($choice as $key => $value) {
	if (isset($value)) {
	$my_choices.=$value.'<br/>';}
}
return $my_choices;