<!-- ephp_008.php -->
<!-- peça para que o usuario digite um numero, em seguida o converta para float, 
exibindo em tela tanto o numero em si como o seu tipo de dado. -->

<html>
    <title>
        <?php $titulo = 'Formulário'; echo $titulo; ?>
    </title>
    <body>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
             Digite o numero: <input type="text" name="fname">
             <input type="submit">
        </form>
    </body>
</html>
<?php echo $_SERVER['PHP_SELF'] . '<br>'; ?>
<?php echo $_SERVER['REQUEST_METHOD'] . '<br>'; ?>
<?php if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $n = $_POST['fname'];
    $valor_float = floatval ($n);
    echo 'O valor inteiro é: ' . $n . '<br>';  // mostra 122.34343
    echo 'O valor de float é: ' .$valor_float; // mostra 122.34343
    echo "<br>";
    $tipo = gettype($n);
    echo $tipo;
    echo "<br>";
    var_dump(round("$n"));
    
} 
?>
