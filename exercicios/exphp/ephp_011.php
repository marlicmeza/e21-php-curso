<!-- ephp_011.php -->
<!-- Solicite os valores de num1 e num2. 
Some os valores das variaveis num1 e num2: sendo num1=52 e num2 = 106. por fim exiba o resultado. -->
<?php
$n1 = '52';
$n2 = '106';

$soma = $n1 + $n2;
$res = $soma;
echo 'O resultado da soma de n1 e n2 é: ' . $res; 
?>

<html>
<title>Exercicio 11</title>
<?php
$num1 = 52;
$num2 = 106;
?>

<body>
<form method="POST">
     Número1: <input type="number" name="input_user1" step="any" value="<?php echo $num1; ?>">
     Número1: <input type="number" name="input_user2" step="any" value="<?php echo $num2; ?>">
     <input type="submit">
    
  </form>
</body>
</html>
    <?php
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $num1 = $_POST['input_user1'];
        $num2 = $_POST['input_user2'];
    }
        $resultado = $num1 + $num2;
        echo 'O valor da soma de número1 e número2 é:' . $resultado;
    ?>

  

<!-- <body>
    <form method="post">
        <input type="text" name="num1">
        <input type="text" name="num2" value="106">
        <input type="text" name="num2" onfocus="this.value='106'">
        <input type="submit" name="enviar" value="teste">
    </form> -->
