<!-- ephp_005.php -->
<!-- Crie uma variavel nome e atribua a mesma um nome digitado pelo usuario -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ephp05</title>
</head>
<body>
    <form method="post" action="">
             Digite nome: <input type="text" name="nome">             
             <input type="submit"> 
    </form>
    </body>
</html>

<?php
$nome = "";
if(!empty($_REQUEST["nome"])) {
  $n = $_REQUEST["nome"];
    print $nome . $n;
}
?>