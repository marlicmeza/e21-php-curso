<?php
try {
$dt="database.sqlite";
$bd=new PDO('sqlite:'.$dt);
// $bd->exec('CREATE TABLE dados (id INTEGER PRIMARY KEY,nome TEXT, idade INTEGER, cep TEXT, saldo INTEGER);');
$_SESSION['pdo']=$bd;
} catch(PDOExecption $r){
    // echo "AQUI";
}

session_start();

?>