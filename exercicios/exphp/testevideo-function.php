<?php
include 'tootls-soma.php'; 
    echo "<BR> soma de args é:" . soma(10,20,30,40);
    echo "<br>";
?>   

<?php
require_once 'tootls-imc.php';
echo "O meu indice de massa corporal require " . imc(79,1.64);
?>

<?php
for ($i = 10; $i >= 1; $i --){
    for ($j = 10; $j >= 1; $j--){
        print "<BR> I: $i, J: $j";
        echo "<br>";
    }
}
    
    
 //REFAZER COM CONTAEM REGRESSIVA

?> 
<!-- VIDEO 10 -->
<!-- VARIAVEIS GLOBAIS -->
<?php
$total = 0 ;
function km2mi($quilometros){
    global $total;
    $total += $quilometros;
    return $quilometros * 0.6;
}
echo "<br> Percorreu" . km2mi(100) . "milhas<br>\n";
echo "<br> Percorreu" . km2mi(200) . "milhas<br>\n";
echo "percorreu um total de" . $total . "quilometros <br>\n"; 

#Variaveis globais não são boa pratica. 
?>

<!-- Variaveis Estáticas -->

<?php 
function percorre($quilometros){
    static $total;
    $total += $quilometros;
    echo "percorreu mais $quilometros do total de $total <br>\n";
}

percorre(100);
percorre(200);
percorre(50);
?>

<!-- VIDEO 12 -->

<!-- Passagem de Parametros --> 
<!-- funcao  
2 tipos diferentes de passagem : 
    by value  (por valor)
    by reference (por referencia)
Quando eu passo um valor dentro da função -- a função recebe como variavel interna (não altera o original )
 -->

 <?php
function incrementa($variavel,$valor){
    $variavel += $valor;
}

$a = 10 ;
incrementa($a,20);
echo $a; 

// Resultado = 10:
?>

<?php
function incrementa2(&$variavel,$valor){
    $variavel += $valor;
}

$a = 10 ;
incrementa2($a,20);
echo $a;
// Me passem na aula o valor do segundo $a 

?>

<?PHP
 // PASSAGEM DE PARAMETROS COM VALORES DEFAULT (OU PADRAO

function incrementa3(&$variavel,$valor=40){
    $variavel += $valor;
}

$a = 10 ;
incrementa3($a);
echo $a;
// RESULTADO SERÁ 50 
?>
<?php
$remove_acento = function($str){
    $a = array('ç','Ç');
    $b = array('c','C');
    return str_replace($a,$b,$str);
};
echo $remove_acento('açafrao');
echo  '<br>';

?>

<?php
$remove_acento = function($str){
    $a = array('á','Á');
    $b = array('a','a');
    return str_replace($a,$b,$str);
};
echo $remove_acento('está, armário, estágio');
echo  '<br>';

?>
<?php
$palavras = array();
$palavras[] = 'conceiÇão';
$palavras[] = 'cação';
$palavras[] = 'caução';
$r = array_map( $remove_acento,$palavras);
print_r($r);

?>

