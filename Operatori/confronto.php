<?php include_once('../menu.php'); include_once('sottomenu.php'); ?>

<?php
$a = '1';
$b = 1;
$d = null;
$e = 0;
$e = '0'; //entrambi false
$e = false;
$e = '';

//UGUAGLIANZA
//conversione a integer
echo '$a == $b   '. $c = $a == $b;
var_dump($a,$b,$c);

//confronto anche il tipo, identico
echo '$a === $b   '. $c = $a === $b;
var_dump($a,$b,$c);

//verifico il null
echo '$d == $e   '. $f = $d == $e;
var_dump($d,$e,$f);
echo '$d === $e   '. $f = $d === $e;
var_dump($d,$e,$f);

echo('<hr>');
//DIFFERENZA
echo '$a != $b   '. $c = $a != $b;
var_dump($a,$b,$c);
echo '$a <> $b   '. $c = $a <> $b;
var_dump($a,$b,$c);
//non identici
echo '$a !== $b   '. $c = $a !== $b;
var_dump($a,$b,$c);

echo '$d != $e   '. $f = $d != $e;
var_dump($d,$e,$f);
echo '$d !== $e   '. $f = $d !== $e;
var_dump($d,$e,$f);

echo('<hr>');
$f = 0;
$g = 1;
$h = 2;
$i = 1;

//MINORE
echo '$f > $g  '. $c = $f > $g;
var_dump($f,$g,$c);
echo '$f < $g  '. $c = $f < $g;
var_dump($f,$g,$c);
//prima < o > poi =
echo '$f >= $g  '. $c = $f >= $g;
var_dump($f,$g,$c);
echo '$f <= $g  '. $c = $f <= $g;
var_dump($f,$g,$c);

echo '$h >= $i  '. $f = $h >= $i;
var_dump($h,$i,$f);
echo '$h <= $i  '. $f = $h <= $i;
var_dump($h,$i,$f);