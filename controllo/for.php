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
<h2>Finche l'espressione è vera fai qualcosa</h2>
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
$arr = ['red','blue','green','yellow'];

for ($i=0; $i < count($arr) ; $i++) { 
  echo '<li>'.$arr[$i].'</li>';
}

echo '<br>';
// numero di elementi non cambia quindi calcoliamolo una volta sola
$tot = count($arr);

for ($i=0; $i < $tot ; $i++) {
  echo '<li>'.$arr[$i].'</li>';
}

echo '<br>';

for ($i=0, $tot = count($arr) ; $i < $tot ; $i++) {
  echo '<li>'.$arr[$i].'</li>';
}

echo '<br>';

$arr = ['red','blue','green','yellow','pink','black'];

//mostro meno elementi
for ($i=0 , $tot = count($arr) ; $i < $tot ; $i++) {
  /* if ($i > 2) {
    break; //esco da for
  } */
  if($arr[$i] === 'pink'){
    continue; //salta al prossimo giro
  }
  echo '<li>'.$arr[$i].'</li>';
}

?>
</ul>
