<!-- Solicite os valores de num1 e num2. Some os valores das variaveis num1 e num2: sendo num1=52 e num2 = 106. por fim exiba o resultado. -->
<!-- Faça com que o valor padrão (ou default) do form seja informado proveniente de uma variavel PHP -->
<!-- Plus: faça com que os valores de num1 e num2 sejam provenientes de uma lista de argumentos -->

<!-- e011b.php -->
<!-- Exemplo do Icaro. -->

<html>
<title>Exercicio 11</title>
<?php
$num1 = 52;
$num2 = 106;
?>

<body>
<form method="">
     Número1: <input type="number" name="input_user1" step="any" value="<?php echo $num1; ?>">
     Número2: <input type="number" name="input_user2" step="any" value="<?php echo $num2; ?>">
     <input type="submit">
    
  </form>
</body>
    <?php
    $num1 = 52;
    $num2 = 106;
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (empty($_POST['input_user1']) || empty($_POST['input_user2'])) {
            $num1 = $_POST['input_user1'];
            $num2 = $_POST['input_user2'];
        }
        $resultado = $num1 + $num2;
        echo '<br> A soma de número1 e número1 é:' . $resultado;
    }
    ?>
  

</html>
<?php if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $num1 = $_GET['input_user1'];
    $num2 = $_GET['input_user2'];
}
    $resultado = $num1 + $num2;
    echo 'O valor da soma de número1 e número2 é:' . $resultado;
    ?>
