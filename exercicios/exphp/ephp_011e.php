<!-- e011e.php -->
<!-- ex  
11. Solicite os valores de num1 e num2. 
Some os valores das variaveis num1 e num2: 
sendo num1=52 e num2 = 106. por fim exiba o resultado.
pegar os dados de num1 e num2 de um form. COM METODO = GET
-->
<body>
    <?php

   
    

    $num1 = 52;
    $num2 = 106;

    

    if (isset($_GET['num1'])) {
        $num1 = ($_GET['num1']);
    }
    if (isset($_GET['num2'])) {
        $num2 = ($_GET['num2']);
    }

   
    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_GET["input_user1"])) {
            $num1 =$_GET["input_user1"];
        }
        if (isset($_GET["input_user2"])) {
            $num2 = $_GET["input_user2"];
        }
    // }

   

    ?>
    <form method="GET">
        Número - 1: <input type="number" name="input_user1" step="any" value="<?php echo $num1 ?>" />
        Número - 2: <input type="number" name="input_user2" step="any" value="<?php echo $num2 ?>" />
        <input type="submit">
    </form>
</body>

</html>
<?php

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $num1 =$_GET['input_user1'];
    $num2 =$_GET['input_user2'];
    $resultado = $num1 + $num2;
    echo "<br> $num1 + $num2 = $resultado <br>";
}

?>

<body>
    <form method="post">
        <input type="text" name="num1">
        <input type="text" name="num2" value="106">
        <input type="text" name="num2" onfocus="this.value='106'">
        <input type="submit" name="enviar" value="teste">
    </form>