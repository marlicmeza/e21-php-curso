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
    <link rel="stylesheet" href="./formatao.css"> 
    <title>BASE</title>
        </head>
            <body>
                <form method="post">
                     <fieldset>
                        <legend>CADASTRO</legend>
                        <label>Nome : </label>
                        Digite nome: <input type="text" name="nome" placeholder="Digite o nome:">
                        <label>Idade </label>
                        Digite idade: <input type="number" name="idade" placeholder="Digite a idade:">
                        <label>Cep </label>
                        Digite cep: <input type="number" name="cep" placeholder="Digite o cep:">
                        <button input type="submit" name="enviar"> Cadastrar </button>
                        <button input type="submit" name="restaurar"> Restaurar dados </button>
                    </fieldset>
                </form>
                    <table>
                    <tr id="titulo">
                    <td>Nome</td>
                    <td>Idade</td> 
                    <td colspan="2">Cep</td>
                    </tr> 
    
<?php 
echo "<br><br>";
if (isset($_POST['cadastro'])) { 
    array_push($_SESSION['dadosarray'], array("nome" => $_POST['nome'], "idade" => $_POST['idade'], "cep" => $_POST['cep']) 
    ); 
} 
if (isset($_POST['restaurar'])) {
    $_SESSION['dadosarray'] = $dadosarray;
}
    foreach ($_SESSION['dadosarray'] as $a => $key){         
        echo "Nome: ".$key['nome']. "<br />idade: ".$key['idade']."<br />cep: ".$key['cep']. 
        "<a href=alterar.php?ID=" . $a ."> alterar </a>";
        // <form method='post'><input type='submit' name='alterar' 
        // value='Alterar' ><a/></form>" . "<br /><br />"; 
    }
    
    
?>  
</table>
</body>
</html>