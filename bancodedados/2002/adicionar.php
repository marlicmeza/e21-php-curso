<?php 
echo "<br><br>";
if (isset($_POST['enviar'])) {
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $cep = $_POST['cep'];
    $saldo = $_POST['saldo'];

    $ad="INSERT INTO dados(nome,idade,cep,saldo)VALUES (:nome,:idade,:cep,:saldo);";
    $prepare=$bd->prepare($ad);
    $prepare->execute([
        ':nome'=>$nome,':idade'=>$idade,':cep'=>$cep,':saldo'=>$saldo
    ]);
  
}



?>