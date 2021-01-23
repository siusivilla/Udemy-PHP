<?php include_once('../menu.php'); include_once('sottomenu.php'); ?>

<?php
//STRUTTURA DI CONTROLLO IF
/* 
 * if(expressione){
 * } elseif(expressione){
 * .
 * .
 * .
 * } else {
 * }
 */
?>
<style>
    pre{
        font-size: 34px;
        font-weight: bold;
    }
</style>
<h2>Se e vero fai qualcosa altrimenti fai altro</h2>
<pre>
<?php

 $money = 35; //valore preso come true
 
/* $money = 0; // ''
    if(!$money){
        echo "non hai soldi";
    } else {
        echo "hai soldi"; 
    }

    if($money){
        echo "hai soldi"; 
    } else {
        echo "non hai soldi";
    }
*/

/* 
    if($money <=10){
        echo ' Puoi comperare una pizza';
    } elseif($money>10 && $money<=20) {
        echo 'Puoi comperare una pizza e una birra';
    } elseif ($money>20 && $money<=30) {
        echo 'Puoi andare in ristorante';
    } else {
        echo 'Puoi portare un amico in ristorante';
    }
*/

//mescolare php e html
if($money <=10): ?>
    <h2> Puoi comperare una pizza</h2>
<?php
    else:
?>
    <h2>Puoi portare un amico in ristorante</h2>
<?php
    endif;

//anche con graffe
/* if($money <=10) { ?>
    <h2> Puoi comperare una pizza</h2>
<?php
    } else {
?>
    <h2>Puoi portare un amico in ristorante</h2>
<?php
    };
    */
?> 
</pre>