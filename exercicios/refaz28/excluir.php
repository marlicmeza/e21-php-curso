<?php
session_start();
require_once 'dados.php';
$tt=2;
if ($_GET['nome']) {  
     var_dump($_GET['nome']);     
     echo "Apagando " . $_GET['nome'] . "<br>";
     $key = array_search($_GET['nome'],array_column($_SESSION['dadosarray'],'nome'));     
     var_dump($key);
     if ($key >=0) { 
          array_splice($_SESSION['dadosarray'],($key), 1);
     } else {
          echo "não achou para excluir:" . "<br>";
     }
     echo "<br>" . "Retornando em $tt segundos ..."; 
}
header("refresh: $tt ; index.php");
?>