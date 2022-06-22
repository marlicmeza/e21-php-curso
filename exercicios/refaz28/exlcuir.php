<?php
session_start();
require_once 'dados.php';
if ($_GET['Nome']) {  
     var_dump($_GET['Nome']);     
     echo "Apagando " . $_GET['Nome'] . "<br>";
     $key = array_search($_GET['Nome'],array_column($_SESSION['usuarios'],'nome'));     
     var_dump($key);
     if ($key) { 
          array_splice($_SESSION['usuarios'],($key), 1);
     } else {
          echo "não achou para excluir:" . "<br>";
     }
     echo "<br>" . "Retornando em $tt segundos ..."; 
}
header("refresh: 2 ;base.php");
?>