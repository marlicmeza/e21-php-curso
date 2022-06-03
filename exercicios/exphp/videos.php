<?php
$a = 1;
if($a == 5){
    echo "e iguala a 5.";
}
else {
    echo "nao e igual <br>";
}

?>


<?php
$a = 'ABACATE';
$b = 'tbem tem';
if($a){
    echo "$a tem conteudo<br>";
}
if ($b){
    echo "$b tem conteudo <br>";
}

?>

<!-- video 02 -->
<?php
$salario = 1010;
$tempo_servico = 12;
$tem_reclamacoes = false;
if ($salario > 1000){
    if ($tempo_servico >= 12){
        if ($tem_reclamacoes != True){
            echo "Parabens voce foi promovido! <br>";
        }
        
    }
}
if (($salario > 100) and ($tempo_servico >= 12) and ($tem_reclamacoes != True)) {
    echo "PARABENS, VOCE FOI PROMOVIDO! <br>";
}
?>

<!-- VIDEO 03 -->
<?php
$a = 1;
while ($a <5) {
    print $a;
    $a ++; 
    
}
?>

<!-- VIDEO 04 -->
<?php
for ($i = 1; $i < 10; $i ++){
    print $i; "<br>";
}
    

?>

<!-- VIDEO 05 -->
<?php
for ($i = 10; $i >= 1; $i --){
    for ($j = 10; $j >= 1; $j--){
        print "<BR> I: $i, J: $j";
        echo "<br>";
    }
}
    
    
 //REFAZER COM CONTAEM REGRESSIVA

?>

<!-- VIDEO 06 -->
<?php
$variavel = 10;
switch ($variavel){
    case 10:
        print "entrou 10;";
        break;
    case 20:
        print "entrou 20";
        break;
    case 30:
        print "entrou 30";
        break;
    default:
        print "entrou no default";
}
$i = 10;
if ($i == 10) {
    print "entrou 10";
} elseif ($i == 20) {
    print "entrou 20";
} elseif ($i == 30) {
    print "entrou 30";
} else {
    print "entrou no default <br>";
   
}
?>

<!-- VIDEO 07 -->
<?php

$cesto_frutas = array("maça", "laranja", "pera", "banana");

foreach($cesto_frutas as $fruta){
    print($fruta);
}
?>

<!-- VIDEO 08 -->
<?php
include 'tootls.php';
echo "<BR> Quadrado de 4 e:". quadrado(4);

// include 'tools.php'; # gera warning se não encontrar o arquivo
//require 'tools.php'; # gera um erro fatal e interrompe. 
//echo "<BR> Quadrado de 4 é:" . quadrado(4);
## a unica diferença para o include é que o erro é fatal e não warning!!!
?>

<?php
$a = 5;
while ($a <=5){
    include_once 'tools.php'; # gera warning se não encontrar o arquivo
    echo "<BR> Quadrado de 5 é:" . quadrado($a);
    $a++; 
}
?>   

<?php
$a = 5;
while ($a <=5){
    require_once 'tools.php'; # gera MORTE do script . ...se não encontrar o arquivo
    echo "<BR> Quadrado de 4 é:" . quadrado($a);
    $a++; 
}
?>    

<!-- VIDEO 09 -->

<!-- FUNÇÃO é pedaço de codigo. 
Objetivo Especifico. 
Encapsulado. 
Retorna um dado conforme os parametros enviados.  -->

<!-- Re-utilização de código. -->

<!-- 
    parametros tem a funçao de receber (argumentos) separados por virgulas (,) 
    function nome_da_funcao(lista de argumentos ou chamamos de lista de parametros){
        ... codigo ..
        ... codigo ... 
        return (integer, string, array, objeto, etc)
    } 
-->

<?php
    function soma($arg1,$arg2,$arg3,$arg4){
        $valor = $arg1 + $arg2 + $arg3 + $arg4;
        return $valor;         
    }
    function imc($peso,$altura){
        return $peso / ($altura * $altura);
    }
    echo "O indice de massa corporal do prof é " . imc(119,1.90);
    
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


<!-- VIDEO 13 -->
<!-- Funções Anonimas 
lambda funcions no PHP são a Instancia de uma classe Closure -->

<?php
$remove_acento = function($str){
    $a = array('ç','Ç');
    $b = array('c','C');
    return str_replace($a,$b,$str);
};
echo $remove_acento('açafrao');
echo  '<br>';

?>

<!-- Inserir na array, todos os acentos e seus substitutivos sem acento  -->
<?php
$palavras = array();
$palavras[] = 'conceiÇão';
$palavras[] = 'cação';
$palavras[] = 'caução';
$r = array_map( $remove_acento,$palavras);
print_r($r);

?>

