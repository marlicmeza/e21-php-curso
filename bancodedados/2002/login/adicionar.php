<?php
if (isset($_POST['adicionar'])) {

    $novoCadastro = ['login' => $_POST['login'], 'password' => $_POST['password']];
    $_SESSION['cadastros'][] = $novoCadastro;
}