<?php include_once('../menu.php'); include_once('sottomenu.php'); ?>

<?php
//STRUTTURA DI SWITCH
/* 
 * SWITCH(expressione){
 * case valore:
 * case valore2:
 * break; //esce dallo switch
 * default:
 * 
 */
?>
<style>
    pre{
        font-size: 34px;
        font-weight: bold;
    }
</style>
<h2>Operazioni alternative a seconda del valore</h2>
<pre>
<?php

$money = FALSE;
//$money = 3;
//$money = 20;

//con o senza graffe
//switch di suo non ritorna un valore
switch ($money){
    case 0:{ //prima fa casting a 0, se tolgo prende il false
        echo 'Non hai soldi<br>';
        //posso fare altre operazioni es. function()
        break;
    }
    case false:
        echo 'E\' false';
        break;
    case 1:{
        echo 'Hai un euro<br>';
        break;
    }
    case 2:
        echo 'hai due euro<br>';
        break;
    case 3: //senza break va avanti finchè non ne trova uno
    case 4:
        echo ' hai 3 o 4';
        break;
    default :
        echo '<br> Valore non valido';
}
?>
</pre>