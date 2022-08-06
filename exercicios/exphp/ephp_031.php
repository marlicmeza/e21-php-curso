<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ephp_031</title>
    </head>
    <body>
    <form action="" method="post">
        Digite nome: <input type="text" name="nome">
        Digite idade: <input type="number" name="idade">
        Digite cep: <input type="number" name="cep">
        <input type="submit" name="cadastro" value="cadastro">
        <input type="text" name="excluir_dados" value="Cadastro a excluir" onfocus="this.value=''">
        <input type="submit" name="delete" value="Excluir">
    </form>
    
<?php 
echo "<br><br>";
session_start();
require_once('ephp_028.php');  

if (isset($_POST['cadastro'])) { 
    array_push($_SESSION['dadosarray'], array("nome" => $_POST['nome'], "idade" => $_POST['idade'], "cep" => $_POST['cep']) 
    ); 
} 

if (isset($_POST['delete']))
    unset($_SESSION['dadosarray'][$_POST['excluir_dados']]);

    foreach ($_SESSION['dadosarray'] as $key => $valor){  
        echo "$key: <br>";       
        echo "Nome: ".$valor['nome']. "<br />idade: ".$valor['idade']."<br />cep: ".$valor['cep']."<br /><br />"; 
    }
    
    

    
?>
    
    
  
</body>
</html>