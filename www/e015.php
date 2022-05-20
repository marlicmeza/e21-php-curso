<html>
    <title>
        <?php $titulo = 'Formulário'; echo $titulo; ?>
    </title>
    <body>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
             Nome: <input type="text" name="fname">
             <input type="submit">
        </form>
    </body>
</html>
<?php echo $_SERVER['PHP_SELF'] . '<br>'; ?>
<?php echo $_SERVER['REQUEST_METHOD'] . '<br>'; ?>
<?php if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo 'Ótimo... aqui é um POST posso pegar as variaveis sem mostrar nada na URL... mais seguro obvio! <br><BR>';
    $x = $_POST['fname'];
    if (empty($x)) {
        echo 'Name is empty';
    } else {
        echo $x;
    }
} ?>
