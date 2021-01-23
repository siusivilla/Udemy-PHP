<?php include_once('../menu.php'); include_once('sottomenu.php'); ?>

<?php
/* 
 * while(expression){
 *  statement
 * }
 * 
 * si esegue almeno una volta
 * do {
 * 
 * } while (expression)
 */
?>
<style>
    pre{
        font-size: 1.5em;
        font-weight: bold;
    }
    /* ul {
        background: #c0c0c0;
        color:#000;
        font-size: 24px;
    } */
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

    $i = 0; //perchè array iniziano da 0
    $total = count($arr);
    while( $i < $total){
        echo '<li>'.$arr[$i].'</li>';
        $i++;
    }
?>
</ul>
