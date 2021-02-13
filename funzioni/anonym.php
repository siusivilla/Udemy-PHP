<?php include_once('../menu.php'); include_once('sottomenu.php'); ?>
<h2>Funzioni variabili e anonime</h2>

<?php
//anonime sono comode come usa e getta

//php assegna un istanza della classe closure alla variabile 
// $somma(2,3); // devo richiamarla dopo l'assegnazione
$somma = function ($val1, $val2 ){
    echo $val1 + $val2;
}; 

$somma(2,3); // devo richiamarla dopo l'assegnazione

echo '<br><br>';

//function test($func){
function test( Closure $func){
    $func(5,5);
}

// passo come argomento ad un altra funzione
test($somma);

echo '<br><br>';

$arr = [2, 4, 6];
echo '$arr = [2, 4, 6]';

//modifico l'array dato utilizzando & 
function double(&$val){
    $val *= 2;
};

array_walk($arr, 'double');

var_dump($arr);

$double = function (&$val){
    $val *= 2;
};

array_walk($arr, $double);

var_dump($arr);
   

?>