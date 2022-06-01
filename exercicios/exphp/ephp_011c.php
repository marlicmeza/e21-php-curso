<body>
    <?php
$num1 = 0;
$num2 = 0;
if (isset($_GET['num1'])) {
    $num1 = ($_GET['num1']);
}
if (isset($_GET['num2'])) {
    $num2 = ($_GET['num2']);
}

if (isset($_POST["input_user1"])) {
    $num1 = $_POST["input_user1"];
}
if (isset($_POST["input_user2"])) {
    $num2 = $_POST["input_user2"];
}

?>
    <form method="post">
        Número1: <input type="number" name="input_user1" step="any" value="<?php echo $num1 ?>" />
        Número2: <input type="number" name="input_user2" step="any" value="<?php echo $num2 ?>" />
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