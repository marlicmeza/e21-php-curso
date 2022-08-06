<?php
foreach ($_SESSION['dadosarray'] as $alt => $chave){ 
        echo "<tr>";
        echo "<td>" . $chave['nome'] . "</td>", "<br>";
        echo "<td>" . $chave['idade'] . "</td>", "<br>";
        echo "<td>" . $chave['cep'] . "</td>", "<br><br>";
        echo "<td>" . $chave['saldo'] . "</td>", "<br><br>";       
        echo "<td>";
        echo "<a href=excluirteste.php?remover=" . $alt . "&nome=" . urlencode($chave['nome']) . ">   Excluir  </a>";
        echo "</td>";
        echo "<td>";
        echo "<a href=alterarteste.php?ID=" . $alt . ">   Alterar  </a>";
        echo "</td>";
        echo "</tr>";       
    }  
    
    
?>