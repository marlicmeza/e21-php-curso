<!-- ephp_010.php -->
<!-- Mostre o tamanho da lista de nomes, o numero de elementos da lista de nomes, 
mostre separadamente apenas o terceiro elemento desta lista. -->

<?php
$lista = array('Marylin', 'Paul', 'Pedrina', 'Saul', 'Josue');
echo "$lista: ";
echo "<br>";
$tipo1 = gettype($lista);
echo "<br>";
print_r($tipo1);
echo "<br>";
var_dump($tipo1);
echo "<br>";
echo $lista[3];

?>