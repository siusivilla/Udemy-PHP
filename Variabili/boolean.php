<?php
  /**
   * Il cast delle variabili è automatico
   * 
   * Valori true:
   * * true
   * * 1
   * * altro
   * 
   * Valori sempre false:
   * * false
   * * integer 0
   * * float 0.0    attenzione '0.0' non è false
   * * stringa vuota ''
   * * stringa "0"
   * * array vuoto []
   * * tipo NULL e variabili disassegnate
   * * oggetti simpleXML creati con tag vuoti 
   */
  
  // posso scrivere maiuscolo, minuscolo o misto è verrà sempre associato come boolean
  $isTrue = true; // TRUE , True , 1 , altro
  $isFalse = false; // FALSE , False , 0 

  if ($isTrue) {
    echo 'è vero';
  } else {
    echo 'è falso';
  }
  echo PHP_EOL;
  if ($isFalse) {
    echo 'è vero';
  } else {
    echo 'è falso';
  }

$castBoolean = (bool) 'test'; // cast forzato
var_dump($castBoolean); // vedere a video il tipo della variabile
$castBoolean = (bool) '';
var_dump($castBoolean); 

?>