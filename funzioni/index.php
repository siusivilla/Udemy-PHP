<?php include_once('../menu.php'); include_once('sottomenu.php'); ?>
<h2>Funzioni</h2>
<!-- <p>Il nome di una funzione deve seguire le regole di nome di php <br>
    cominciare con lettere o _ ( trattino basso) seguita da lettere, numeri e trattino passo.<br>
    Il nome non è case sensitive <br>
    Deve essere preceduta dalla keyword function:
</p>
<pre>
    <code>
    function foo($arg_1, $arg_2, $arg_n)
    {
        echo "Example function.\n";
        return $retval;
    }
    </code>
</pre>
<ul>
    <li>Possono essere chiamate prima della definizione</li>
    <li>Possono essere annidate ma la funzione interna non esiste funché non si chiama la funzione padre.</li>
    <li>Tutte le funzioni hanno visibilità globale</li>
    <li> Hanno parametri variabili e parametri di default</li>
    <li>Possono essere chiamate ricorsivamente</li>
</ul> -->
    
<?php
$result = test();
var_dump($result);

function test(){
    echo "funzione chiamata<br>";
    //return 4; //senza return la funzione restituisce NULL
    return [3, 5 ,6 ,7];
}

echo '<br>';

$result = summ(2, 5);
//$result = summ(2, '5');
//$result = summ(2, 'nonparsa');
$result = summ(2, 5, 5);
var_dump($result);

//parametri con valori di default vanno a dx dell'ultimo parametro con un valore richiesto
//può essere seguiti da default a null
function summ($val1, $val2 , $val3 = 10, $val4=null ){
    //return $val1 + $val2;
    return $val1 + $val2 + $val3 + $val4;
    
}

echo '<br>';

?>
<h3>Parametri variabili</h3>
<?php
// parametri variabili
function summVar(){
    
    /* echo "<pre>parametri della funzione: "; print_r(func_get_args()); echo "</pre>";
        //var_dump(func_get_args()); // func_get_args() array con tutti i parametri passati
        echo 'array_sum = ' . array_sum(func_get_args()); 
    */
    //return array_sum(func_get_args()); 

    $total = func_num_args();
    echo "numero parametri = $total";

    if(!func_num_args()){
        return null;
    }

    $result = 0;
    
    //accedere ai parametri, visto che non sappiamo quanti sono
    foreach (func_get_args() as $val){
        $result += $val; 
    }
    //return $result;

    for($tot = 0 , $result = 0; $tot < $total; $tot++){
        $result += func_get_arg($tot);
    }
    return $result;
}

$result = summVar(2, 5, 7, 9, 11);
var_dump($result);
?>