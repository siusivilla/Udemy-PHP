<?php include_once('../menu.php'); include_once('sottomenu.php'); ?>

<?php
/* 
  $a == $b	Uguale	TRUE se $a è uguale a $b dopo la manipolazione dei tipi.
  $a === $b	Identico	TRUE se $a è uguale a $b, ed sono dello stesso tipo.
  $a != $b	Diversi	TRUE se $a è diverso da $b dopo la manipolazione dei tipi.
  $a <> $b	Diversi	TRUE se $a è diverso da $b dopo la manipolazione dei tipi.
  $a !== $b	Non identici	TRUE se $a è diverso da $b, o se non sono dello stesso tipo.
  $a < $b	Minore	TRUE se $a è strettamente minore di $b.
  $a > $b	Maggiore	TRUE se $a è strettamente maggiore di $b.
  $a <= $b	Minore o uguale	TRUE se $a è minore o uguale a $b.
  $a >= $b	Maggiore o uguale	TRUE se $a è maggiore o uguale a $b.
  $a <=> $b Spaceship . Disponibile  PHP 7.  -1 se il primo è minore, 1 se è maggiore o 0 se sono uguale
  $a ?? $b ?? $c Null coalescing .Disponibile PHP 7.  Ritorna il primo valore not null
  (condizione)? : valore2 
*/

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