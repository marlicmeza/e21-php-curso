<?php
require_once 'config.php';
// $db = $_SESSION['db'];
// if(isset($db))echo "set";
// else echo "not set";

function InserirPessoa($PESSOA_NOME,$PESSOA_IDADE,$PESSOA_CIDADE_ID) {
    print "Entrou";
    $db = $_SESSION['db'];
    $sql = 'INSERT INTO PESSOAS(PESSOA_NOME,PESSOA_IDADE,PESSOA_CIDADE_ID)' .
                'VALUES(:PESSOA_NOME,:PESSOA_IDADE,:PESSOA_CIDADE_ID)';

    $tmp = $db->prepare($sql);
    $tmp->execute([
       ':PESSOA_NOME'  => $PESSOA_NOME,
       ':PESSOA_IDADE' => $PESSOA_IDADE,
       ':PESSOA_CIDADE_ID' => $PESSOA_CIDADE_ID,
    ]);
    return $db->lastInsertId() ; 
}

$novoID = InserirPessoa('Tania',40,2);
print "<b> <br> $novoID </b> </br>";

$novoID = InserirPessoa('Paula',20,1);
print "<b> <br> $novoID </b> </br>";

unset($db);
unset($_SESSION['db']);

?>