<!-- ephp_023.php -->
<!-- Crie um programa que realiza a contagem regressiva de 20 segundo -->

<?php
   echo date('h:i:s') . "<br>";
   sleep(20);
   echo date('h:i:s') . "<br>";

   for ($x=0;$x=20;$x++) {
    echo $x;
    sleep(1);
    }
?>



