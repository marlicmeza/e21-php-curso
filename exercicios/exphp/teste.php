<?php
// session_start();
// require_once('teste3.php');  
?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ephp_029</title>
    </head>
    <body>
        <form method="post">
             Digite nome: <input type="text" name="nome" required>
             Digite idade: <input type="number" name="idade" required>
             Digite cep: <input type="number" name="cep" required>
             <input type="submit" name="cadastro" value="cadastro">
             <input type="button" name="alterar" value="Alterar Cadastro">
             <input type="button" name="exlcuir" value="Excluir Cadastro">
             <input type="button" name="restaurar" value="Restaurar">


        </form>
        <?php
        session_start();
        require_once('ephp_029.php');

        if (!$_SESSION["dadosarray"])
            $_SESSION['dadosarray'] = $dadosarray;

        if (isset($_POST['delete']))
            unset($_SESSION['dadosarray'][$_POST['excluir']]); // Deletes an array position

        foreach ($_SESSION['dadosarray'] as $key => $value)
        {
            echo "$key: <br>";
            foreach ($value as $val)
                echo "$val <br>";
            echo "<br>";
        }
    ?>
</html>