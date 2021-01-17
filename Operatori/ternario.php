<?php include_once('../menu.php'); include_once('sottomenu.php'); ?>
<h4>Ternario</h4>
<?php

echo "(condizione) ? valore da restituire se vero : valore da restituire se falso";

echo'<br><br>';
echo 'is_null($nome) ? \'N/A\' : $nome';
echo'<br><br>';
echo '$nome = Susanna'; $nome = 'Susanna';
echo'&emsp;ottengo:&emsp;';
echo $ternario = is_null($nome)? 'N/A' : $nome;

echo'<br><br>';
echo '$nome = null'; $nome = null;
echo'&emsp;ottengo&emsp;';
echo $ternario = is_null($nome)? 'N/A' : $nome;