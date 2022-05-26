<!-- ephp_009.php -->
<!-- crie uma lista com 5 nomes de pessoas, e imprima os nomes. -->
<?php
    $lista =  array('Marylin', 'Paul', 'Pedrina', 'Saul', 'Josue');
    echo 'Os nomes da lista são: ';
    echo "<br>";
    foreach ($lista as $lista){
        echo $lista, "<br>";
    }    
?>