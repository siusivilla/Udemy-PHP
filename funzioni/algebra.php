<?php include_once('../menu.php'); include_once('sottomenu.php'); ?>
<h2>Spread (...) e parametri variabili</h2>

<pre>
    <code>
    function mathOp ($op , ...$args){
        $res =0;
        switch ($op){
            case '+':
                $res = array_sum($args);
                break;
            
            ...
            
        return $res;
    }
    </code>
</pre>

<?php
// ... compatta gli argomenti passati in array
function mathOp($op,...$args){
    
    //echo "$op <br>";
    //print_r($args);
    //print_r(func_get_args($args));
    
    if(empty($args)){
        return null;
    }
    
    $ret = 0;
    
    switch ($op){
        
        case '+':
            $ret = array_sum($args);
            break;
            
        case '*':
            $ret = 1;
            foreach ($args as $arg){
                $ret *= $arg;
            }
            break;
            
            case '-':
            $ret = $args[0];
            $vals = array_slice($args,1);
            foreach ($vals as $val){
                $ret -= $val;
            }
            break;
            
        case '/':
            $ret = $args[0];
            $vals = array_slice($args,1);
            foreach ($vals as $val){
                $ret /= $val;
            }
            break;
            
            default :
            $ret = null;
            
        }
        return $ret;
    }
    
echo 'mathOp(\'+\', 2,4) &emsp; 2 + 4 = '. mathOp('+', 2,4);
echo '<br><br>';

$vals = [2, 5, 6, 8];
//var_dump( mathOp('*',...$vals));
echo '$vals = [2, 5, 6, 8]; <br> mathOp(\'*\',...$vals) &emsp; 2 * 5 * 6 * 8 = '. mathOp('*',...$vals);
echo '<br><br>';

echo 'mathOp(\'-\', 2,4) &emsp; 2 - 4 = '. mathOp('-', 2,4);

$vals = [2, 8];
echo '<br><br>';
echo 'mathOp(\'/\', 2,4,2) &emsp; 2/4/2 = '. mathOp('/', 2,4,2);
//scompongo array in valori singoli con ...$vals
//echo 'mathOp(\'/\', $vals) &emsp; 2/8 = '. mathOp('/', $vals); //errore perchè viene passato un array non vari valori
echo '<br>$vals = [2, 8];<br>';
echo 'mathOp(\'/\', ...$vals) &emsp; 2/8 = '. mathOp('/', ...$vals); //... scompatta l'array
echo '<br>';
echo 'mathOp(\'/\', 3,4,5,3) &emsp; 3/4/5/3 = '. mathOp('/', 3,4,5,3);

?>