<!-- ephp_024.php -->
<!-- Crie um programa que realiza a contagem de 1 a 100, usando apenas números impares ao final do processo
exiba em tela quantos números impares foram encontrados nesse intervalo, assim como a soma dos mesmos: -->

<?php
$ni=null;
$so=null;
for ($va = 1; $va <=100; $va++){
    if ($va %2 == 1){
    echo "$va <br>";
    $ni++;
    $so+=$va;
    }
}
echo 'O total de números impares é: '.$ni; 
echo "<br>";
echo 'A soma dos total de números impares é: '.$so;
?>