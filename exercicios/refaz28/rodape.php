<?php
require_once "base.php";
?>

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