<?php
session_start();

$server_db= '3.89.36.150';
$username_db = 'phpe2122g2';
$senha_db = 'phpe2122g2@22@ago';
$nome_db = 'phpe2122g2';
$db = mysqli_connect($server_db, $username_db, $senha_db, $nome_db);{
    echo "CONNECT";
}

if(! $db ) {
    die('Could not connect: ' . mysql_error());
 }


$_SESSION['db'] = $db;