<?php include_once('../menu.php'); include_once('sottomenu.php'); ?>
Mappe ordinate con chiavi e valori.
Chiavi: 
- stringhe e/o numeri - se non specificate vengono create automaticamente numeriche 0 ...
- case sensitive
<br>

<?php
$arr = array();
$arr = array('RED','GREEN','BLUE');
//visualizzo come è composto l'array e il tipo di valori contenuti
//var_dump($arr);
//visualizzo come è composto l'array
//print_r($arr);
$arr[] = 'PINK';
$arr[9] = 'YELLOW';
$arr[] = 'MAGENTA'; //indice numerico con 'indice_numerico_maggiore + 1'
$arr['giallo'] = 'AMARILLO'; //possono convivere chiavi numerico e stringa
$arr[] = 'BLACK'; //indice numerico con 'indice_numerico_maggiore + 1'
//aggiungo array
$arr[4] = [2,4,44,44];

echo $arr['giallo'];

//define('giallo',4);
//echo $arr[giallo]; //php ci arriva e non blocca il codice ma può creare molti problemi, avendo una costante giallo viene utilizzata come chiave 

$arr['5'] = 'cinque';
//$arr['5.2'] = 'cinque .2';
//$arr[5.2] = 'cinque'; //troncato ad intero 5.2 -> 5

$arr['giorni'] = ['lunedì','martedì'];
var_dump($arr);

echo '<h4>array multidimensionale</h4>';
echo "Valore chiave 4 terza posizione è {$arr[4][3]}";
echo "<br>Valore chiave giorni prima posizione è {$arr['giorni'][1]}";
var_dump($arr);

//aggiungo un elemento in coda all'array
array_push($arr['giorni'], 'mercoledì');

//sostituisco un valore
$arr['giallo'] = 'giallo'; //possono convivere chiavi numerico e stringa

//rimuovo un elemento
unset($arr['giorni']);
unset($arr[2]);
//le chiavi di altri elementi non vengono riorgnizzate, rimangono come create

var_dump($arr);

//riordina utilizzando il numerico, tolto la chiave 'giallo'
$arr = array_values($arr);
var_dump($arr);

echo('<hr>');

$arr2 = ['a','b','c','d'];
var_dump($arr2);
unset($arr2[2]);
var_dump($arr2);

//per riordinare
$arr2 = array_values($arr2);

?>