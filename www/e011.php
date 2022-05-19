<!-- e011.php -->

<?php
$nome = "Adriano";
$caipirinha = array('Limão', 'Açucar', 'Água', 'Engov');
echo "$Caipirinha: ";
echo $caipirinha[1];
echo "<br>";
$tipo1 = gettype($caipirinha);
$tipo2 = gettype($nome);
echo "<br>";
print_r($tipo1);
echo "<br> Tipo2:";
print_r($tipo2);
echo "<br>";
echo "var_dump 1 e 2:<br>";
var_dump($tipo1);
echo "<br>";
var_dump($tipo2);

?>