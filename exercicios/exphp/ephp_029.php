<?php
session_start();
require_once('ephp_028.php');  
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
        </form>
    
<?php 
echo "<br><br>";
if (isset($_POST['cadastro'])) { 
    array_push($_SESSION['dadosarray'], array("nome" => $_POST['nome'], "idade" => $_POST['idade'], "cep" => $_POST['cep']) 
    ); 
} 
    foreach ($_SESSION['dadosarray'] as $a){         
        echo "Nome: ".$a['nome']. "<br />idade: ".$a['idade']."<br />cep: ".$a['cep']."<br /><br />"; 
    }
    
    
?>  
</body>
</html>