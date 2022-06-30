<?php
session_start();
require_once('dados.php');  
?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./formato.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilo.css">     
    <title>TESTE</title>
        </head>
            <body>
                <h1>TELA DE CADASTRO E ALTERAÇÃO</H1>
                <br>
                <form method="post">
                    <fieldset>
                        <legend>CADASTRAR</legend>
                        <label>Nome : </label>
                        Digite nome: <input type="text" name="nome"  placeholder="Digite o nome:">
                        <label>Idade </label>
                        Digite idade: <input type="number" name="idade"  placeholder="Digite a idade:">
                        <label>Cep </label>
                        Digite cep: <input type="number" name="cep"  placeholder="Digite o cep:">
                        <label>Saldo </label>
                        Digite saldo: <input type="number" name="saldo"  placeholder="Digite o saldo R$:">
                        <br>
                        <button input type="submit" name="enviar"> Cadastrar </button>
                        <button input type="submit" name="restaurar">  Restaurar dados </button>                        
                    </fieldset>
                </form>
                    <table>
                    <tr id="titulo">
                    </tr>                     
                    <tr id="titulo">
                    <td>Nome</td>
                    <td>Idade</td>
                    <td>Cep</td>
                    <td>Saldo</td>                    
                    <td>Excluir</td>
                    <td>Alterar</td>
                    </tr>    
<?php 
echo "<br><br>";
if (isset($_POST['enviar'])) {
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $cep = $_POST['cep'];
    $saldo = $_POST['saldo'];

    $cadnovo= array(
        "nome" => $nome,
        "idade" => $idade,
        "cep" => $cep,
        "saldo" => $saldo
    );
    array_push($_SESSION['dadosarray'], $cadnovo);
} 
if (isset($_POST['restaurar'])) {
    $_SESSION['dadosarray'] = $dadosarray;
}
require_once "imprimir.php";

?>

</table>
<?php
require_once "rodape.php";
?>
</html>