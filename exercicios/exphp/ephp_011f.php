<!-- e011f.php -->
<!-- ex  
11. Solicite os valores de num1 e num2. 
Some os valores das variaveis num1 e num2: 
sendo num1=52 e num2 = 106. por fim exiba o resultado.
pegar os dados de num1 e num2 de um form. COM METODO = POST 
-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EPHP11E</title>
</head>
<body>
    <?php
        if (isset($_POST["n1"])){
            $n1 = $_POST["n1"];}
        else {
            $n1 = 52;}
        if (isset($_POST["n2"])){
            $n2 = $_POST["n2"];}
        else {
            $n2 = 106;}
    ?>
    <form method = "POST">
        Número 1 = <input type="number" required name="n1" value=<?php echo $n1; ?>>
        Número 2 = <input type="number"  required name="n2" value=<?php echo $n2; ?>>
        <input type="submit">
    </form>
    
</body>
</html>
<?php 
    $soma = $n1 + $n2;
    echo 'A soma de ' . $n1 . ' e ' . $n2 . ' é = ' . $soma;
?>


