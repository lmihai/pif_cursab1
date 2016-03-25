<?php
$a='';
//legatura cu array-ul ce reprezinta alegerile utilizatorului
include '../model/Array.php';
foreach ($choice as $key => $value) {
	if (isset($value)) {
	$a.=$value.'<br/>';}
}