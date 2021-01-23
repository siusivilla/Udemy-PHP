<?php include_once('../menu.php'); include_once('sottomenu.php'); ?>

<?php
/**
 * $exp_ini : espressione iniziale
 * $exp_check : espressione di controllo per eseguire il ciclo
 * $exp_end : espressione a fine di ogni ciclo
 * 
 * for ($exp_ini; $exp_check ; $exp_end) { 
 *  // codice
 * }
 * 
 * for ($i=0; $i < ; $i++) { 
 *  // codice
 * }
 * 
 */
?>
<style>
    pre{
        font-size: 1.5em;
        font-weight: bold;
    }
</style>
<h2>For Annidiati</h2>
<?php
    /* 
    ciclo infinito, bisogna incrementare la $1
    $i= 1;
    while ($i <= 10){
        echo $i.'<br>';
    }

    non si esegue neanche una volta
    $i= 11;
    while ($i <= 10){
        echo 'while';
        echo $i.'<br>';
        $i++;
    }
    
    //$i= 1;
    //eseguo almeno una volta 
    do {
        echo $i.'<br>';
        $i++; 
    } while ($i <= 10);
    */
?>

<ul>
<?php
$arr = ['red','blue','green','yellow','pink','black'];

for ($j=0; $j < 3 ; $j++) {
  //mostro meno elementi
  for ($i=0 , $tot = count($arr) ; $i < $tot ; $i++) {
    if ($i == ($tot - 1)) {
      $hr = '<hr>';
    } else {
      $hr = '';
    }
    /* if ($i > 2) {
      break; //esco da for
    } */
    /* if($arr[$i] === 'pink'){
      continue; //salta al prossimo giro
    } */
    
    //if($j == 1) break; //esce dal ciclo for con $i
    //if($j == 1) break 2; //esce dal ciclo for con $i e dal ciclo for con $j
    //if($j == 1) continue;

    //echo "<li>$arr[$i] $hr</li>";
    //echo "<li>elemento: $i è $arr[$i] <br>ciclo : $j  $hr</li>";
    echo "<li>$j <=> $i $arr[$i] <br>$hr</li>";
  }
}
?>
<h4>Tabelline</h4>
<?php
  for ($i=1; $i < 10; $i++) {
    echo "Tabellina $i <br>";
    for ($j=0; $j <=10; $j++) {
      echo "$i x $j = ".($j*$i)."&emsp;";
      if ($j==10) {
        echo '<hr>';
      }
    }
  }
?>
</ul>
