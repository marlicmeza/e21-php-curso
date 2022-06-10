<?php
session_start();
if(!isset($_SESSION["required"])){
    $_SESSION['required'] = true;
    require_once('ephp_028.php');
    $_SESSION['cadastro'] = $cadastro;
}
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
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
             Digite nome: <input type="text" name="nome" required>
             Digite idade: <input type="number" name="idade" required>
             Digite cep: <input type="number" name="cep" required>
             <input type="submit"> 
        </form>
    </body>
    <?php 
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$cep = $_POST['cep'];

    if ($_SERVER['REQUEST_METHOD'] == 'post') {
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];    
        $cep = $_POST['cep'];
        $array = array_merge($nome, $idade, $cep);
        array_push($erro, "Erro 1");
        
        echo $array;
    }
?>
</html>