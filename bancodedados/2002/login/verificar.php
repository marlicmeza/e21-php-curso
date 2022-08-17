<?php

function verificaDados(array $arrayEnviado, array $arraySalvo) : void {

    foreach($arraySalvo as $indice) {
        if ($arrayEnviado == $indice) {
            echo  'Logando...';

            $_SESSION['logado'] = true;
            $_SESSION['salvaLogin'] = $arrayEnviado;
            header("refresh: 1; logado.php");

        } else  {
            echo "Nome ou senha incorreto! <br>";
            $_SESSION['logado'] = false;

        }
    }
}