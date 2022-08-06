

<!-- Crie um programa que le um valor de inicio e um valor de fim, 
exibindo em tela a contagem dos numeros dentro desse intervalo. -->

<?php
$var1 = 1;
$var2 = 10;
while ($var1 < $var2){
    if ($var1 >1)
    echo $var1;
    $var1 = $var1 + 1;
    
}

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
