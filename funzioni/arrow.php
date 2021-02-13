<?php include_once('../menu.php'); include_once('sottomenu.php'); ?>
<h2>Arrow</h2>

<?php
$arr = [
  [
    'nome' => 'Susanna',
    'cognome' => 'Villa',
  ]
];

$arrnew = array_map(function($val){
  $tmp = [];
  foreach ($val as $k => $v) {
    $tmp[$k] = strtoupper($v);
  }
  return $tmp;
}, $arr);

echo "<pre>"; print_r($arrnew); echo "</pre>";

//uso variabile esterna (non globale) in funzione temporanea
$prefix = 'CC_';

$arrnew = array_map(function($val) use($prefix){
  $tmp = [];
  foreach ($val as $k => $v) {
    $tmp[$k] = $prefix.strtoupper($v);
  }
  return $tmp;
}, $arr);

echo "<pre>"; print_r($arrnew); echo "</pre>";

//ARROW
/* $arr = [
    'nome' => 'Susanna',
    'cognome' => 'Villa',
];

//arrow eredita le variabili esterne, niente use
$arr_result = array_map(
  fn($v) => strtoupper($v)
  ,$arr
);

echo "<pre>"; print_r($arr_result); echo "</pre>"; */