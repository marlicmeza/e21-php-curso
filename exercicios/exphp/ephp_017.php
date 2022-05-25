<!-- ephp_017.php -->
<!-- Crie uma estrutura de repetição que percorre a string 'Projeto Entra21': -->

<?php
$laco = array('P',"<br>",'R',"<br>",'O',"<br>",'J',"<br>",'E',"<br>",'T',"<br>", 'O',"<br>","<br>", 'E',"<br>",'N',"<br>",'T',"<br>",'R',"<br>",'A',"<br>",'2',"<br>",'1');
for($posicao = 0; $posicao < count($laco); $posicao++)
{
echo $laco[$posicao] . "
";
}
?>