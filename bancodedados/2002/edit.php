<?php
require_once 'html/editar.php';
require_once 'bd.php';
var_dump ($_GET);
$id=$_GET['editar'];

if(isset($_POST['alterar'])){
    $ad="UPDATE dados SET nome=:nome,idade=:idade,cep=:cep,saldo=:saldo WHERE id=:id;";
    $prepare=$bd->prepare($ad);
    $prepare->execute([
        ':nome'=>$_POST['nome'],
        ':idade'=>$_POST['idade'],
        ':cep'=>$_POST['cep'],
        ':saldo'=>$_POST['saldo'],':id'=>$id
    ]);

    header("location:listar.php");
}

if(isset($_POST['excluir'])){
    $apagar="DELETE FROM dados WHERE id=:id;";
    $prepare=$bd->prepare($apagar);
    $prepare->execute([
        ':id'=>$id
    ]); 
    
    header("location:listar.php");
}


?>
