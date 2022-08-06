<?php
session_start();
require_once('ephp_028.php');  
if (isset($_POST['deletedados'])) {
    $found_key = (array_search($_POST['deletedados'], array_column($_SESSION['dadosarray'], 'nome'))+1);
    $_SESSION['dadosarray'][$found_key]['status'] = false;
}

if (isset($_POST['alterardados'])) {
    $found_key = (array_search($_POST['alterardados'], array_column($_SESSION['dadosarray'], 'nome'))+1);
    echo "achou:" . $_SESSION['dadosarray'][$found_key]['nome'] . "<br>";
}
?>