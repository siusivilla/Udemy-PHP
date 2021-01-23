<?php include_once('../menu.php'); include_once('sottomenu.php'); ?>

<?php
/* 
 * Verifico se una variabile è stata impostata e non ha valore null
 * 
 * isset(variabile)
 */
?>
<style>
    pre{
        font-size: 1.5em;
        font-weight: bold;
    }
</style>
<h2>Controlli sull'esistenza della variabile e del suo valore</h2>
<pre>
<?php
$name = 'Susanna';
//$name = '';
//$name = 0;
//$name = '0';
$name = [];
//$name = null;

var_dump($name);
?>
<p id="isset">isset : variabile esiste e non è = null</p>
<?php
/* 
if(($name)){
  echo "errore se non impostata"; 
} else {
  echo "name esiste";
} */

if(isset($name)){
  echo "name esiste "; print_r($name);
} else {
  echo "name non esiste"; 
}
?>
<hr>
<p id="empty">empty : variabile esiste e il suo valore non equivale a false in casting</p>
<?php  
/**
 * empty quando:
 * * non è stata dichiarata
 * * con il cast risultano false: '', [], 0 , ...
 */

if(empty($name)){
  echo "name non esiste"; 
} else {
  echo "name esiste";
}
?>
<hr>
<p id="is_null">is_null : il valore è = null</p>
<?php
  /**
   * is_null contrario di isset ma se variabile non settata da errore
   */
  if(is_null($name)){
    echo "name non esiste";
  } else {
    echo "name esiste "; print_r($name);
  }
?>
</pre>