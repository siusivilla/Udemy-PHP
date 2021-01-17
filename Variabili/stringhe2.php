<?php include_once('../menu.php'); include_once('sottomenu.php'); ?>

Le stringhe sono viste come una sequenza di caratteri, un array, con posizioni
<br><br>
<?php

$stringa = 'gia';
//$stringa[3] = 'à'; //sostituisco il bite
echo $stringa;
echo '<br><br>';

echo 'sono una sequenza di bite, se sostituisco a con à, un bite in più, 
prende solo il primo bite e poi non riconosce il carattere dando carattere strano';

$a = 'a';
$acc = 'à';
var_dump($a);  
var_dump($acc);

strlen($a);        // 1
strlen($acc);      // 2
strlen($stringa);  // 3  
strlen('');        // 0

//con mb_ analizza il carattere e non i byte che lo compongono
//c'è un parametro abilitabile in php per fare in modo che le native diano lo stesso risultato di mb_nativa
mb_strlen($a);        // 1
mb_strlen($acc);      // 1 
mb_strlen($stringa);  // 3 
mb_strlen('');        // 0

echo '<br>a strlen='.strlen($a),' - mb_strlen='.mb_strlen($a);
echo '<br>à strlen='.strlen($acc),' - mb_strlen='.mb_strlen($acc);
echo '<br>gia strlen='.strlen($stringa),' - mb_strlen='.mb_strlen($stringa);
echo '<br>già strlen='.strlen('già'),' - mb_strlen='.mb_strlen('già');
?>

<h1>Casting</h1>
<?php
/** Coversione in stringa
 *  null = ''
 *  true = 1
 *  false = ''
 *  numeri in equivalente carattere per numero
 *  Array
 */

$arr = [1,2];
echo $arr;

$booleano = false;
var_dump($booleano);
var_dump((string)$booleano); //casting forzato
echo 'false in stringa = '.$booleano;
$booleano = true;
var_dump($booleano);
var_dump((string)$booleano);
echo 'true in stringa = '.$booleano;

echo '<br><br>';
echo $stringa.$booleano; //booleano messo in stringa per la concatenazione
//echo $booleano.$stringa; //booleano messo in stringa per la concatenazione

$vuoto = null;
var_dump($vuoto);
var_dump((string)$vuoto);
echo 'null in stringa = '.$vuoto;

  
?>