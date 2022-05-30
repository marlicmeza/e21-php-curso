<!-- ex  
11. Solicite os valores de num1 e num2. 
Some os valores das variaveis num1 e num2: 
sendo num1=52 e num2 = 106. por fim exiba o resultado.
-->
<!-- By Denize -->
<body>
    <?php
    $num1 = 51; $num2 = 52;
    
    if (isset($_GET['num1'])){
        $num1 = ($_GET['num1']);
    }
    if (isset($_GET['num2'])){
        $num2 = ($_GET['num2']);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["input_user1"])){
            $num1 = $_POST["input_user1"];            
        }        
        if (isset($_POST["input_user2"])){
            $num2 = $_POST["input_user2"];            
        }
    }
    ?>
    <form method="post">
        Número - 1: <input type="number" name="input_user1" step="any" value="<?php echo $num1 ?>" />
        Número - 2: <input type="number" name="input_user2" step="any" value="<?php echo $num2 ?>" />
        <input type="submit">
    </form>
</body>

</html>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['input_user1'];
    $num2 = $_POST['input_user2'];

    
    $resultado = $num1 + $num2;
    echo "<br> $num1 + $num2 = $resultado <br>";
}

?>