<?php include_once('../menu.php'); include_once('sottomenu.php'); ?>

<h1>Stringhe</h1>
<?php

  $first_name ='Susanna';
  $last_name = 'Villa';
  //con le " posso fare il parsing di $last_name
  //ed interpreta altri caratteri speciali come \n (new lines)
  $full_name = "Susanna $last_name";
  $address = 'Val Lagarina 57';

  
  //echo $full_name;
  
  $dati ="$full_name \n \t $address"; //i due testi andranno a capo nel codice non in quel che vediamo a schermo
  echo "$dati";
  echo '<br><br>';
  //trasformo \n in <br>
  echo nl2br($dati);
?>

<h1>Heredoc</h1>
<?php    
  $array = [1,2];
  $array['chiave'] = 20157;
  
  $obj = new stdClass();
  $obj->name = $full_name;

  //parsing tra graffe
  $datiEod = <<<EOD
    Testo Heredock<br>
    Nome: $first_name<br>
    Cognome: $last_name<br>
    Indirizzo: $address<br>
    
    <br>
    Qualunque espressione php tra graffe : {$array['chiave']}
    <br>
    $array[0] se indice numerico non servono le graffe
    <br>
     
    $obj->name
  EOD; //allineato con $ della variabile se php < 7.3
  //attenzione all'indentazione del contenuto

  echo $datiEod;

  echo '<h2>Nowdoc</h2>';

  //non fa il parsing, prende tutto com'è
  $datiNod = <<<'EOD'
    <<<'EOD'
    Testo Heredock<br>
    Nome: $first_name<br>
    Cognome: $last_name<br>
    Indirizzo: $address<br>
    
    <br>
    Qualunque espressione php tra graffe : {$array['chiave']}
    <br>
    $array[0] se indice numerico non servono le graffe
    <br>
     
    $obj->name EOD;
  EOD;

  echo $datiNod

?>