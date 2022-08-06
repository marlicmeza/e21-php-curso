<!-- e006.php -->

<?php

$a = 5;
$b = $a;
echo $b; 
echo ' ';
$b = 10 ;
echo $a; // resultado deve ser 5
echo ' '; // resultado deve ser um espaço
echo $b; // resultado deve ser ??? 10 

?>
