<?php include_once('../menu.php'); include_once('sottomenu.php'); ?>

<?php
$a = 0;
$b = 1;

//confronta <= e >=
echo '$a <=> $b   '. $c = $a <=> $b;
echo '<br> primo è minore del secondo';
var_dump($a,$b,$c);


$a = 1;
$b = 1;

//confronta <= e >=
echo '$a <=> $b   '. $c = $a <=> $b;
echo '<br> valori uguali';
var_dump($a,$b,$c);

$a = 2;
$b = 1;

//confronta <= e >=
echo '$a <=> $b   '. $c = $a <=> $b;
echo '<br> primo è maggiore del secondo';
var_dump($a,$b,$c);