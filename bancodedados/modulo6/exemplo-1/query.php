<?php

require_once 'config.php';

$db = $_SESSION['db'];

// if(isset($db)) echo "Variável foi setada";
// else echo "Não foi configurada ainda!";

$query="SELECT * FROM CIDADES";

foreach ($db->query($query) as $cidades) {
    print "<b> Cidade: </b>" . $cidades['CIDADE_NOME'] . "\n <br>";
}

$query="SELECT * FROM PESSOAS";
foreach ($db->query($query) as $pessoas) {
    print "<b> Pessoa: </b>" .
        $pessoas['PESSOA_ID'] . " - " .
        $pessoas['PESSOA_NOME'] . " - " .
        $pessoas['PESSOA_CIDADE_ID'] . "\n <br>";
}

$query="SELECT PESSOA_NOME,CIDADE_NOME from PESSOAS,CIDADES WHERE PESSOA_CIDADE_ID=CIDADE_ID";
foreach ($db->query($query) as $pessoasecidades) {
    $pessoasecidades['PESSOA_NOME'] . " - " .
    $pessoasecidades['CIDADE_NOME'] . "<br>";
}
?>