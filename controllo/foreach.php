<?php include_once('../menu.php'); include_once('sottomenu.php'); ?>

<?php
/**
 * foreach ($variable as $key => $value) {
 *   # code...
 * }
 */
?>

<style>
    pre{
        font-size: 1.5em;
        font-weight: bold;
    }
</style>

<h2>Foreach, ciclare un array</h2>

<?php
$arr = ['red','blue','green','yellow','pink','black'];

foreach ($arr as $value) {
  echo $value;
  echo'<br>';
}

echo '<hr>';

foreach ($arr as $key => $value) {
  echo'<br>';
  echo "$key = $value ";
}

echo '<hr>';

$arr2 = [
  'rosso' => 'red',
  'blu' => 'blue',
  'verde' => 'green',
  'giallo' => 'yellow',
  'rosa' => 'pink',
  'nero' => 'black'
];

var_dump($arr2);
foreach ($arr2 as $key => $value) {
  $value = strtoupper($value);
  echo "$key = $value <br>";
}
var_dump($arr2);

// per riferimento modifico array originale
foreach ($arr2 as $key => &$value) {
  $value = strtoupper($value);
  echo "$key = $value <br>";
}
var_dump($arr2);

/**
 * ARRAY MULTIDIMENSIONALE
 */
//essendo per riferimento posso modificarla fuori dal ciclo 
$value = 'cambio fuori ciclo';

unset($value); //tolgo il riferimento
$value = 'cambio fuori ciclo';
var_dump($arr2);
//per evitare fare unset

echo '<hr>';
$arr3[] = ['A','B','C'];
$arr3[] = ['D','E','F'];

foreach ($arr3 as $key => $value) {
  foreach ($value as $v) {
    echo "$key = $v <br>";
  }
}
?>