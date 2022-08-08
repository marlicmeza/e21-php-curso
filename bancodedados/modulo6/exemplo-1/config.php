<?php
session_start();
try{
        $db = new PDO('sqlite:modulo6.sqlite');
}
catch(PDOException $e)
{
    print "<b> Nao conectou! Verifique!!!" . $e;
}

$_SESSION['db'] = $db;



?>