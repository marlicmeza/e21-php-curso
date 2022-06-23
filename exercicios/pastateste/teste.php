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
    <title>BASE</title>
        </head>
            <body>
                <h1>TELA DE CADASTRO E ALTERAÇÃO</H1>
                <br>
                <form method="post">
                     <fieldset>
                        <legend>CADASTRAR</legend>
                        <label>Nome : </label>
                        Digite nome: <input type="text" name="nome" placeholder="Digite o nome:">
                        <label>Idade </label>
                        Digite idade: <input type="number" name="idade" placeholder="Digite a idade:">
                        <label>Cep </label>
                        Digite cep: <input type="number" name="cep" placeholder="Digite o cep:">
                        <br>
                        <button input type="submit" name="enviar"> Cadastrar </button>
                        <button input type="submit" name="restaurar"> Restaurar dados </button>
                    </fieldset>
                </form>
                    <table>
                    <tr id="titulo">
                    </tr>                     
                    <tr id="titulo">
                    <td>Nome</td>
                    <td>Idade</td>
                    <td>Cep</td>
                    <td>Excluir</td>
                    <td>Alterar</td>
                    </tr>
    
<?php 
echo "<br><br>";
if (isset($_POST['enviar'])) {
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $cep = $_POST['cep'];

    $cadnovo= array(
        "nome" => $nome,
        "idade" => $idade,
        "cep" => $cep
    );
    array_push($_SESSION['dadosarray'], $cadnovo);
} 
if (isset($_POST['restaurar'])) {
    $_SESSION['dadosarray'] = $dadosarray;
}
    foreach ($_SESSION['dadosarray'] as $alt => $chave){ 
        echo "<tr>";
        echo "<td>" . $chave['nome'] . "</td>", "<br>";
        echo "<td>" . $chave['idade'] . "</td>", "<br>";
        echo "<td>" . $chave['cep'] . "</td>", "<br><br>";
        echo "<td>";
        echo "<a href=excluir.php?remover=" . $alt . "&nome=" . urlencode($chave['nome']) . ">   Excluir  </a>";
        echo "</td>";
        echo "<td>";
        echo "<a href=alterar.php?ID=" . $alt . ">   Alterar  </a>";
        echo "</td>";
        echo "</tr>";
       
    }
    
    
?>  
</table>
</body>
</html>