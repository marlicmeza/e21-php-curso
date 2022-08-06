<!-- Crie um cadastro de Pessoas com 5 pessoas utilizando Array. Cada pessoa deve ter os seguintes valores cadastrados: Nome, idade, Cep. A Chave primária da Array será o numero 1,2,3,4,5. -->
<!-- <?php require_once 'ex028b.php' ?> -->
<title>Exercício28b</title>
<?php
$marli = ['Nome' => 'Marli', 'Idade' => 30, 'CEP' => '123'];
$willian = ['Nome' => 'Willian', 'Idade' => 18, 'CEP' => '234'];
$claudio = ['Nome' => 'Cláudio', 'Idade' => 27, 'CEP' => '456'];
$thiago = ['Nome' => 'Thiago', 'Idade' => 25, 'CEP' => '789'];
$bruno = ['Nome' => 'Bruno', 'Idade' => 26, 'CEP' => '000'];


$cadastroPessoas = [
    1 => $bruno,
    2 => $claudio,
    3 => $willian,
    4 => $marli,
    5 => $thiago
];

$teste = [0 => $cadastroPessoas];
function exibeCadastro(array $cadastro){
    foreach ($cadastro as $informacoesIndices => $dadosIndice) {
        //criei uma lista e atribui o valor de cada indice a uma variavel, pegando todas elas do $dadosindice

        ['Nome' => $nome, 'Idade' => $idade, 'CEP' => $cep] = $dadosIndice;

        echo "Nome: {$nome}<br>";
        echo "Idade: {$idade}<br>";
        echo "CEP: {$cep}<br>";
    }
}
print_r($cadastroPessoas);
?>