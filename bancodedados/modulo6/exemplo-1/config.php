<?php
// session_start();
try
{
    // $db = new PDO("mysql:host=".$dbHostname.";dbname=".$dbDatabase, $dbUsername, $dbPassword);
    $db = new PDO('sqlite:modulo6.sqlite') ;
    // print("Conectou");
}
catch(PDOException $e)
{
    print "<b> Não conectou! Algo deu errado, verifique!!!: <br>" . $e;
}

$_SESSION['db'] = $db;

?>