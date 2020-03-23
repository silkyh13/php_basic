<?php

$kat = [
  'eyes' => 'brown',
  'age' => 3,
  'career' => 'war machine'
];
//push into array
$kat['name'] = "Kat";
//delete from array
unset($kat['age']);

echo '<pre>';//reformulate JSON
var_dump($kat);//JSON the array only
echo '</pre>';//look neater

//kils evryfing but $kat
// die(var_dump($kat));
// foreach ($names as $name) {
//   echo $name . ', ';
// }

//h.w.

//https://www.w3schools.com/charsets/ref_utf_dingbats.asp for built in symbols
$task = [
  "title" => 'learn PHP',
  'due' => 'March 20',
  'assigned_to' => 'Kat',
  'completed' => false
];

require 'index.view.php';