<?php
    $saldo_total = 0;
    $total_dados = count($_SESSION['dadosarray']);
    $total_idade = 0;
    foreach ($_SESSION['dadosarray'] as $cadastro){
        $saldo_total += $cadastro['saldo'];
        $total_idade += $cadastro['idade'];
        }
    $media_idade = ($total_idade / $total_dados); 

?>
    