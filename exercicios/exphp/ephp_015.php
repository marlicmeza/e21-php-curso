<!-- ephp_015.php -->
<!-- Solicite duas variaveis: num1 e num2.  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ephp-015</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
             Digite o numero1: <input type="number" name="n1" required>
             Digite o numero2: <input type="number" name="n2" required>
             <input type="submit"> 
    </form>
    
</body>
</html>

<?php
$n1 = $_POST['n1'];
$n1 = $_POST['n1'];
    if($_SERVER['REQUEST_METHOD'] == "POST") {
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        echo 'Número1 = '. $n1;
        echo "<br>";
        echo 'Nuúmero2 = ' . $n2;
        echo "<br><BR>";
    }

// Versão I: verifique se o valor de num1 é maior que o de num2.

if ($n1 > $n2) {
    echo 'Número1 é maior que Número2.';
    echo "<br><BR>";
} else {
    echo 'Número1 não é maior que Número2.';
    echo "<br><BR>";
}
// Versão II:  Verifique se os valores de num1 e de num2 são iguais. 

if ($n1 == $n2) {
    echo 'Número1 é igual Número2.'; 
    echo "<br><BR>";
} else {
    echo 'Número1 não é igual Número2.';
    echo "<br><BR>";
}

// Versão III: Verifique se os valores de num1 e de num2 são diferentes.

if ($n1 !== $n2) {
    echo 'Número1 e Número2 são de tipos diferentes.';
    echo "<br><BR>";
    } 


// Versão IV: Verifique se o valor de num é é igual ou menor que 100.

$val = 100;
if ($n1 <= $val) {
    echo 'Número1 é menor ou igual a 100.';    
    echo "<br><BR>";
    }

//Versão V: Verifique se os valores de num1 e de num2 são iguais ou menores que 100.

if ($n1 && $n2 <= $val) {
    echo 'Número1 e número2 é menor ou igual a 100.'; echo "<br><BR>";   
    } 
    

// Versão VI: Verifique se os valores de num1 ou de num2 são iguais ou maiores que 100.

if ($n1 && $n2 >= $val) {
    echo 'Número1 e número2 é maior ou igual a 100.'; echo "<br><BR>";   
    } 
    
//Versão VIII: Verifique caso o valor de num1 for maior que o do segundo, exiba em tela uma mensagem de acordo, caso contrario, 
 //exiba em tela uma mensagem dizendo que o primeiro valor digitado é menor que o segundo.
if ($n1 > $n2) {
    echo 'O número um é maior que o número2!'; echo "<br><BR>";
} else {
    echo 'O número1 é menor que o número2!'; echo "<br><BR>";
}

// Versão IX: Verifique se num1 e num2 são PAR(es) ou se é IMPAR(es):
if($n1 % 2 == 0) {
   echo "$n1 é par!"; echo "<br><BR>";
} else {
   echo "$n1 é ímpar!"; echo "<br><BR>";
   
 }

 if($n2 % 2 == 0) {
    echo "$n2 é par!"; echo "<br><BR>";
 } else {
    echo "$n2 é ímpar!"; echo "<br><BR>";
    
  }

?>

<?php
// Versão VII: USAR IN Verifique se o valor de num1 consta nos elementos de lista1 Sendo num1=100 e lista1= [10,100,1000,10000,100000].
$num1 = 100;
 $lista = array('10', '100', '1000', '10000', '100000');
foreach ($lista as &$valor) {
    if($num1==$valor){
    echo "O valor de n1 consta na lista. <br>";
    break;
    }
}

?>

<?php

//Verifique caso o valor de num1 for maior que o do segundo, exiba em tela uma mensagem de acordo, caso contrario, 
//exiba em tela uma mensagem dizendo que o primeiro valor digitado é menor que o segundo.



?>