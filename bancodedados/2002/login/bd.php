<?php
$cadastros = [0 => ['login' => 'admin', 'password' => 'senha']];

if (!isset($_SESSION['cadastros'])) {
    $_SESSION['cadastros'] = $cadastros;
}