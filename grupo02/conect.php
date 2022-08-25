<?php
$mysqli_connection = new MySQLi($server_db= '3.89.36.150', $username_db= 'phpe2122g2', $senha_db= 'phpe2122g2@22@ago', $nome_db= 'phpe2122g2');
if($mysqli_connection->connect_error){
   echo "Desconectado! Erro: " . $mysqli_connection->connect_error;
}else{
   echo "Conectado!";
}
?>