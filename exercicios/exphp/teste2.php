<?php
session_start();
require_once('teste3.php');  
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
 $b= "<br>";
 
if (isset($_POST['cadastro'])) { 
    array_push($_SESSION['dadosarray'], array("nome" => $_POST['nome'], "idade" => $_POST['idade'], "cep" => $_POST['cep']) 
    ); 
} 
    foreach ($_SESSION['dadosarray'] as $a){         
        echo "Nome: ".$a['nome']. "<br />idade: ".$a['idade']."<br />cep: ".$a['cep']."<br /><br />"; 
    //     require_once "teste3.php";
    //     if ($_GET['delete']){
    //         echo "Deletando " . $_GET['delete'] . " -> " . $_GET['nome'] . $b . $b;
    // $key = array_search($_GET['nome'], array_column($_SESSION['dadosarray'], 'nome'));
    // array_splice($_SESSION['dadosarray'], ($key), 1);
    // echo "a key(array):" . $key . " com a chave(id) : " . $_GET['delete'] . " Nome: " . $_GET['nome'] . " foi excluida" . $b;
    // echo $b . "Retornando em 3 segundos ...";
    // //Redireciona para a pagina inicial.
    // header("refresh: 3;teste2.php");
    
}
require_once "teste4.php";
if(!isset($_GET['apagar'])) { 
    array_splice($_SESSION['dadosarray'] , $_GET['apagar'], 1);}    
	if (isset($_POST['restaura'])) { 
        $_SESSION['cadastro'] = $dadosarray; 
    }        
    echo '<br /><a href="teste3.php">teste3</a>';
    
?> 
<form method="post">
    <input type = "submit" name = "restaurar" value = "restaurar"> 
</body>
</html>