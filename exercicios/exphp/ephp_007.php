<!-- ephp_007.php -->
<!-- Leia de um form um numero que o usuario digitou em seguida exiba em tela o numero digitado. -->

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
    echo 'O valor digitado é: ' . $n . '<br>';  
    
} 
?>
