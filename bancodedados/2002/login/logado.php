<?php
session_start();
require_once 'logout.php';

if ($_SESSION['logado']) {
    echo "Bem vindo: ";
    echo $_SESSION['salvaLogin']['login'];
}
if (!$_SESSION['logado']) {

    echo  'Você não está logado';
    header("refresh: 1; logar.php");
}