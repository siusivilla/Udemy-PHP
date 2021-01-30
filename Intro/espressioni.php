<?php
//eseguire in riga di comando: php Intro/espressioni.php
echo "eseguire in riga di comando: php Intro/espressioni.php";

$result = 2+2;

fwrite(STDOUT,$result); //STDOUT: standard output solo da riga di comando

echo "\n". $result;
echo "\n".'Hello world';

$name = 'Hidran';
file_put_contents('intro/test.txt', $name);