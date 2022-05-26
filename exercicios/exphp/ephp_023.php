<!-- ephp_023.php -->
<!-- Crie um programa que realiza a contagem regressiva de 20 segundo -->

<?php
   echo date('h:i:s') . "<br>";
   sleep(20);
   echo date('h:i:s') . "<br>";
   
?>

//   <!-- function sleepFloatSecs($secs) {
//     $intSecs = intval($secs);
//     $microSecs = ($secs - $intSecs) * 1000000;

//     if($intSecs > 0) {
//       sleep($intSecs);
//     }
//     if($microSecs > 0) {
//       usleep($microSecs);
//     }
//   }
// 