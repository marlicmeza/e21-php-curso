<?php
require_once 'bd.php';
$dados=$bd->query('SELECT * FROM dados');
$jose=$dados->fetchAll(PDO::FETCH_ASSOC);

foreach($jose as $pessoas){
// var_dump($pessoas);
echo "{$pessoas['nome']} <br>"; 
echo "{$pessoas['idade']} <br>"; 
echo "{$pessoas['cep']}<br>";  
echo "{$pessoas['saldo']}<br>"; 


echo"<a href='edit.php?editar={$pessoas['id']}'><input type='submit' name='editar'value= 'editar{$pessoas['nome']}'></a>";

}

?>