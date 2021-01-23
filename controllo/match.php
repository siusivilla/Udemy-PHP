<?php include_once('../menu.php'); include_once('sottomenu.php'); ?>

<?php
/*
$a == $b	Uguale	TRUE se $a è uguale a $b dopo la manipolazione dei tipi.
$a === $b	Identico	TRUE se $a è uguale a $b, ed sono dello stesso tipo.
$a != $b	Diversi	TRUE se $a è diverso da $b dopo la manipolazione dei tipi.
$a <> $b	Diversi	TRUE se $a è diverso da $b dopo la manipolazione dei tipi.
$a !== $b	Non identici	TRUE se $a è diverso da $b, o se non sono dello stesso tipo.
$a < $b     Minore	TRUE se $a è strettamente minore di $b.
$a > $b     Maggiore	TRUE se $a è strettamente maggiore di $b.
$a <= $b	Minore o uguale	TRUE se $a è minore o uguale a $b.
$a >= $b	Maggiore o uguale	TRUE se $a è maggiore o uguale a $b.
$a <=> $b   Spaceship . Disponibile  PHP 7.  -1 se il primo è minore, 1 se è maggiore o 0 se sono uguale
$a ?? $b ?? $c  Null coalescing .Disponibile PHP 7.  Ritorna il primo valore not null
(condizione)? : valore2
*/
?>
<style>
    pre{
        font-size: 34px;
        font-weight: bold;
    }
</style>

<h2>Come Switch ma confronta il tipo di dato oltre al valore, da PHP 8</h2>

<?php
$money = FALSE;
//$money = 3;
//$money = '3';
//$money = 20;

print_r("E' false");
print_r("E' false",false);

//graffe obbligatorie
$result = match($money){
        //chiave => valore restituito
        1 > 2 => print("E' false"), //print_r("E' false",false)
        0 => print("Non hai soldi"),
        3,4 => print("Non 3 o 4"),
        //dobbiamo per forza mettere un defaul
        default => print("Nessuno dei valori")
    };

var_dump($result);
?>
<pre>
<?php
$a = 'a';
$b = 'b';
$c = $a == $b;

//var_dump($a,$b, $c);
$price = 0;
/*if($price!==null){
    echo "prezzo aggiornato";
} else {
     echo "prezzo non aggiornato";
}*/

// >, <, >=, <=

$d = 2;
$e = 1;
$f = $d > $e;
//var_dump($d,$e, $f);

$age = 28;
 if($age >= 18){
    // echo "sei maggiorenne";
 } else {
     //echo "sei minorenne";
 }
 // <=>
 
 $g = 2;
  $h = 1;
  $i = $g <=> $h;
 // var_dump($g, $h, $i);
  if($i ===0){
     // echo " $g e $h sono uguali";
  } elseif($i === -1){
     //  echo " $g è minore di $h ";
  } else {
      // echo " $g è maggiore di $h ";
  }
  $val1 = 1;
  $val2 = null;
  $result = $val1 ?? $val2??3;
 // var_dump($result);
  
  $ternary = ($val1 ===$val2)?:false;
  var_dump($ternary);
 // echo $ternary;
  if($val1 == $val2){
      echo 'sono uguale';
  } else {
      echo 'sono diversi';
  }
?>
</pre>