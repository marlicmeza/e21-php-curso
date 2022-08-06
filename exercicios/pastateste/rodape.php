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
</body>
<footer>
    <h3>Total de dados = <?php echo $total_dados;?></h3>
    <h3>Total em carteira = <?php echo "R$: " .$saldo_total;?></h3>
    <h3>Média de idade = <?php echo $media_idade;?></h3>
    <div>
        <line>---</line>
        <p> by Marli Meza</p>
        <line>---</line>
    </div>
</footer>
</html>