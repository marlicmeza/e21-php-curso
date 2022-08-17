<?php
require_once 'bd.php';
$dados=$bd->query('SELECT * FROM dados');
$jose=$dados->fetchAll(PDO::FETCH_ASSOC);

foreach($jose as $pessoas){
// var_dump($pessoas);
echo "{$pessoas['nome']}"; 
echo "{$pessoas['idade']}"; 
echo "{$pessoas['cep']}";  
echo "{$pessoas['saldo']}</n<br>"; 


echo"<a href='edit.php?editar={$pessoas['id']}'><input type='submit' name='editar'value= 'editar{$pessoas['nome']}'></a>";

}

?>