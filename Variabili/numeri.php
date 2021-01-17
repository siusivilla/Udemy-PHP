<?php include_once('../menu.php'); include_once('sottomenu.php'); ?>

<?php
  $dec = 255; // TRUE , True , 1 , altro
  var_dump($dec);

  /* php fa in automatico l'operazione e poi converte  */
  var_dump($dec*4);

  // se l'operazione si aspetta un integer estrae il numero da una variabile composta come
  $decimale = '255caratteri';
  $decimale2 = '255';
  var_dump($decimale*4);

  /**
   * Altri formati 
   * vengono usati internamente come int 
   */

  /* Base Ottale inizia 0 */
  $octal = 0124; // 01234567 conversione decimale = 4*8^0 + 2*8^1 + 1*8^2
  var_dump($octal);
  /* Esadecimale inizia 0x */
  $hex = 0xDE; //0123456789ABCDE... conversione con 16 E=15 15*16^0 e cosi via
  var_dump($hex);
  /* Binario inizia 0b */
  $bin = 0b11111111; // 0 1 posizioni valgono 1 2 4 8 16 ...
  var_dump($bin);

  $result = $dec * $hex;
  echo $result;
  echo '<br>';
  $result = $dec / $hex;
  echo $result;
  
  $float = 1234.55; //virgola flottante
  $result = $dec * $float;
  echo '<br>';
  echo $result;
?>