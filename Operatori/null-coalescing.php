<?php include_once('../menu.php'); include_once('sottomenu.php'); ?>
<h4>Ottenere il primo valore che non è nullo</h4>
<?php
$a = null ?? 2 ?? 3;
echo '$a = null ?? 2 ?? 3';
echo '&emsp;&emsp; ottengo:&emsp;'. $a;

echo'<br><br>';

$a = null ?? null ?? 3;
echo '$a = null ?? null ?? 3';
echo '&emsp;&emsp; ottengo:&emsp;'. $a;

echo'<br><br>';

$b = null;
$c = 10;
$a = $b ?? $c ?? 3;
echo '$b = null e $c = 10<br>';
echo '$a = $b ?? $c ?? 3';
echo '&emsp;&emsp; ottengo:&emsp;'. $a;

echo'<br><br>';
$b = 8;
$c = null;
$a = $b ?? $c ?? 3;
echo '$b = 8 e $c = null<br>';
echo '$a = $b ?? $c ?? 3';
echo '&emsp;&emsp; ottengo:&emsp;'. $a;

echo '<hr>';

$arr = [
  'nome' => 'Susanna',
  'citta' => 'Milano',
  'cognome' => null,
];

echo $cognome = $arr['cognome'] ?? 'N/A';

//echo 'in PHP 7.4';
//$arr['cognome'] ??= 'N/A'; //se ha un valore prendilo altrimendi assegna N/A
//echo $cognome = $arr['cognome'] ?? 'N/A';

//variabile stringa nome di default a null e non obbligatoria
function mostranome(?string $nome = null)
{
  /* if(is_null($nome)){
    $nome = 'N/A';
  }

  $nome = is_null($nome)? 'N/A' : $nome; */

  $nome = $nome ?? 'N/A';
  //$nome ??= 'N/A';
  echo $nome;

}
echo'<br><br>';
mostranome('Susanna');
echo'<br><br>';
mostranome();