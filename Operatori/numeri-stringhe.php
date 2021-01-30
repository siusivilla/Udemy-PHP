<?php include_once('../menu.php'); include_once('sottomenu.php'); ?>
<h4>Confronto numero stringhe, cambia completamente con php 8</h4>
<?php
/*
cast numero->stringa fino alla versione 8

test online: https://sandbox.onlinephpfunctions.com/

Comparison    | Before php 8 | After php 8
------------------------------
 0 ==  "0"     | true   | true
 0 == "0.0"   | true   | true

 0 == "foo"   | true   | false
 0 == ""      | true   | false
42 == "   42" | true   | true
42 == "42foo" | true   | false

*/
echo "qualsiasi stringa che non contiene un numero viene trasformata a 0<br>";

echo '0 == "0"  '; echo (0 == "0") ? 'true' : 'false';
echo "<br>";
echo '0 == "0.0"    '; echo (0 == "0.0") ? 'true' : 'false';
echo "<br>";
echo '0 == "foo"   '; echo (0 == "foo") ? 'true' : 'false';
echo "<br>";
echo '0 == ""  '; echo (0 == "") ? 'true' : 'false';
echo "<br>";
echo '42 == "   42"  '; echo (42 == "   42") ? 'true' : 'false';
echo "<br>";
echo '42 == "42foo"  '; echo (42 == "42foo") ? 'true' : 'false';
echo "<br>";


$age = 4;
$result ="4aa";

var_dump($age == $result);

$data = [4,5,'php'];

//casting a 5 e scarta aa;
var_dump(in_array('5aa ', $data));
var_dump(in_array('5aa ', $data, true));

var_dump(in_array(0, $data));