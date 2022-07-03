<?php
    foreach ($_SESSION['dadosarray'] as $alt => $chave){ 
        echo "<tr>";
        echo "<td>" . $chave['nome'] . "</td>", "<br>";
        echo "<td>" . $chave['idade'] . "</td>", "<br>";
        echo "<td>" . $chave['cep'] . "</td>", "<br><br>";
        echo "<td>" . $chave['saldo'] . "</td>", "<br><br>";
        echo "<td>";
        echo "<a href=alterar.php?ID=" . $alt . ">   Alterar  </a>";
        echo "</td>";
        echo "<td>";
        echo "<a href=excluir.php?remover=" . $alt . "&nome=" . urlencode($chave['nome']) . ">   Excluir  </a>";
        echo "</td>";       
        echo "</tr>";       
    }
    
    $saldo_total = 0;
    $total_dados = count($_SESSION['dadosarray']);
    $total_idade = 0;
    foreach ($_SESSION['dadosarray'] as $cadastro){
        $saldo_total += $cadastro['saldo'];
        $total_idade += $cadastro['idade'];
        }
    $media_idade = ($total_idade / $total_dados); 
    ?>
    
   
