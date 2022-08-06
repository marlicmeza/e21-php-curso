<!-- e012.php -->

<?php
$carro = new stdClass;
$carro->modelo='Palio';
$carro->ano='2002';
$carro->cor='Desbotado';
echo "<br>";
print_r($carro);
echo "<br>";
print $carro->modelo;
echo "<br>";
print $carro->ano;
echo "<br>";
print $carro->cor;

?>
