<?php
session_start();

if(isset($_GET['apagar'])){
    array_splice($_SESSION['dadosarray'] , $_GET['apagar'], 1);
    header('Location: /teste3.php');
}
?>
