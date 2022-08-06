<!-- ephp_018.php -->
<!-- Crie uma lista com 8 elementos de uma lista de compras de supermercado, 
por meio de um laço de repetição for, liste individualmente cada um dos itens dessa lista. -->

<?php
$lista = array('Feijão',"<br>",'Arroz',"<br>",'Sal',"<br>",'Café',"<br>",'Açucar',"<br>",'Farinha',"<br>", 'Iogurte',"<br>", 'Leite');
for($posicao = 0; $posicao < count($lista); $posicao++)
{
echo $lista[$posicao] . "
";
}
?>

