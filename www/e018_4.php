<!-- e018_4.php -->

<?php

$vai_chover = TRUE;
$esta_frio = TRUE;
if($vai_chover AND $esta_frio){
    echo "Não vou sair de casa";
}

echo "<br>----------<br>";
$vai_chover = TRUE;
$esta_frio = FALSE;
IF($vai_chover or $esta_frio){
    echo "Vou ficar em casa";
}

echo "<br>----------<br>";
// echo "Os dois não podem ser verdadeiros... um exclui o outro... forma excluisa<br>";
$vai_chover = TRUE;
$esta_frio = FALSE;
IF($vai_chover xor $esta_frio){
    echo "Vou pensar duas vezes em sair de casa";
}

echo "<br> linha 26 ---- NOT => !$a <br>";
$a = false;
if (!$a){
    echo "Entrou aqui";
}

echo "<br> && Se ambos operadores são verdadeiros<br>";
$a = true;
$b = true;
if ($a && $b){
    echo "Ambos são TRUE <br>";
}

echo "<br> && Se a ou B são verdadeiros<br>";
$a = true;
$b = true;
if ($a || $b){
    echo "A ou B são TRUE <br>";
}


?>