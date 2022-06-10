<?php
// Utilizando o exercicio acima, (mantenha os 5 cadastros ja existentes e) faça um formulario permita insersão de novas pessoas.
 require_once '0281matheus.php' ?>
?>
<title>Ex28</title>

<body>
    <form method="post">
        <label for="nome">Digite o Nome:</label>
        <input type="text" name="nome" placeholder="Insira o nome sem acentos">

        <label for="idade">Digite a Idade:</label>
        <input type="number" name="idade" placeholder="1 a 100">

        <label for="cep">Digite o CEP:</label>
        <input type="number" name="cep" placeholder="123.456.789-0">
        <input type="submit">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        require_once 'ex028.php';
        $nome_adicionar = $_POST['nome'];
        $idade_adicionar = $_POST['idade'];
        $cep_adicionar = $_POST['cep'];

        $array2 = ['Nome' => $nome_adicionar, 'Idade' => $idade_adicionar, 'CEP' => $cep_adicionar];

        // array_push($cadastroPessoas, $adicionaPessoas);
        // exibeCadastro($cadastroPessoas);
    }

    ?>
</body>