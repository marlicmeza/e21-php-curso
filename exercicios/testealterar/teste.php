<?php
session_start();
require_once('dados.php');  
?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <title>teste</title>
    </head>
    <body>
        <form method="post">
             Digite nome: <input type="text" name="nome" required>
             Digite idade: <input type="number" name="idade" required>
             Digite cep: <input type="number" name="cep" required>
             <input type="submit" name="cadastro" value="cadastro">
        </form>
        <table>
        <tr id="titulo">
            <td>Nome</td>
            <td>Idade</td>
            <td>Cep</td>
            <td>Excluir</td>
            <td>Alterar</td>
        </tr>
    
<?php 
echo "<br><br>";
if (isset($_POST['cadastro'])) { 
    array_push($_SESSION['dadosarray'], array("nome" => $_POST['nome'], "idade" => $_POST['idade'], "cep" => $_POST['cep']) 
    ); 
} 
    foreach ($_SESSION['dadosarray'] as $alt => $key){              
        echo "<td>" . $key['nome'] . "</td>", "<br>";
        echo "<td>" . $key['idade'] . "</td>", "<br>";
        echo "<td>" . $key['cep'] . "</td>", "<br><br>";
        echo "<td>";
        echo "<a href=excluir.php?Delete=" . $alt . "&nome=" . urlencode($key['nome']) . ">   Excluir  </a>";
        echo "</td>";
        echo "<td>";
        echo "<a href=alterar.php?ID=" . $alt . ">   Alterar  </a>";
        echo "</td>";
        echo "</tr>";
    }
    
    
?>  
</body>
</html>