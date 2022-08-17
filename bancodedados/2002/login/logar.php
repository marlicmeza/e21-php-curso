<?php
session_start();
require_once 'html/form.html';
require_once 'bd.php';
require_once 'adicionar.php';
require_once 'verificar.php';
require_once 'reset.php';


foreach ($_SESSION['cadastros'] as $indice => $dados) {
echo "<br><br>";
    echo "Login: {$dados['login']} <br> ";
    echo "Senha: {$dados['password']} <br>";
}
if (isset($_POST['enviar'])) {

    $loginUser = ['login' => $_POST['login'], 'password' => $_POST['password']];

    verificaDados($loginUser, $_SESSION['cadastros']);
}