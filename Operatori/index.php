<?php include_once('../menu.php'); include_once('sottomenu.php'); ?>

<?php
$a = 5;
$b = 8;

$c = $a + $b; //assegno un espressione ad un valore
echo '$c = $a + $b &emsp; '.$c;
echo '<br>';
echo '$c = $a + $b*5 &emsp; '. $c = $a + $b*5;
echo '<br>';
echo '$c = ($a + $b)5 &emsp; '. $c = ($a + $b)*5;
echo '<br>';
echo '$c = ($a + $b)/5 &emsp; '. $c = ($a + $b)/5;
echo '<br>';
echo '<br>';
echo 'modulo  $d = 25 % 8 &emsp; '.$d = 25 % 8; var_dump($d);
echo '<br>';
echo 'radice  $f = sqrt(16) &emsp; '.$f = sqrt(16); var_dump($f);
echo '<br>';
echo 'potenza  $e = 2**4 &emsp; '.$e = 2**4; //attenzione alla precedenza con gli altri operatori
echo '<br>';
echo 'vecchia potenza  $e = pow(2,4) &emsp; '.$e = pow(2,4);

echo('<hr>');
echo "<h5>Attenzione alla precedenza nell'uso dell'esponenziale</h5>";
echo '2**3**2 = '.$result = 2**3**2;  //512
echo '<br><br>';
//sx a dx 2*3 8 8*2 è 64 
echo 'da sx a dx&emsp; 2**3 = '. 2**3;
echo '&emsp;8**2 = '. 8**2;
echo '<br><br>';
//precedenza a dx 3*2 2*9  è 512
echo 'da dx a sx&emsp; 3**2 = '. 3**2;
echo '&emsp;2**9 = '. 2**9;
