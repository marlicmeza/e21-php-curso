<?php
require_once 'html/form.php';
require_once 'bd.php';
require_once 'adicionar.php';

var_dump($_SESSION);

if(isset($_POST['editar'])){
header("location:edit.php");
}
if(isset($_POST['listar'])){
    header("location:listar.php");
}
?>

