<?php
session_start();
require_once ('base.php');
$alteracao  = $_SESSION['dadosarray'][$_GET['ID']];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilos.css">
    <title>alterar</title>
</head>
<body>

    <form action="" method="post">
        <fieldset>
            <legend> Alteração Cadastro </legend>
                <label>Nome : </label>
                <input type="text" name="nome" value="<?php echo$alteracao['nome'];?>">
                <label>Idade :</label>
                <input type="number" name="idade" value="<?php echo$alteracao['idade'];?>">
                <label>Cep :</label>
                <input type="text" name="cep" value="<?php echo$alteracao['cep'];?>">
                <label>Saldo :</label>
                <input type="text" name="saldo" value="<?php echo$alteracao['saldo'];?>">
                <br><br>
                <button type="submit" name="alterar"> Alterar </button>
        </fieldset>
    </form> 
<?php
    if (isset($_POST['alterar'])) {
            $nome=$_POST['nome'];
            $idade=$_POST['idade'];
            $cep=$_POST['cep'];
            $saldo=$_POST['saldo']; 

            $_SESSION['dadosarray'][$_GET['ID']]['nome'] = $nome;
            $_SESSION['dadosarray'][$_GET['ID']]['idade'] = $idade;
            $_SESSION['dadosarray'][$_GET['ID']]['cep'] = $cep;
            $_SESSION['dadosarray'][$_GET['ID']]['saldo'] = $saldo;
            

            
    }
   
    header("refresh: 2 ;base.php");
?>

</body>
</html>