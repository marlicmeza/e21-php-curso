<!-- ephp_022.php -->
<!-- Crie um programa que exibe em tela a tabuada de um determinado número fornecido pelo usuário. -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>
    <form method="post" action="">
             Digite um numero: <input type="number" name="tab">             
             <input type="submit"> 
    </form>
    </body>
</html>

<?php
if(!empty($_REQUEST["tab"])) {
  $n = $_REQUEST["tab"];
  for($i=1; $i<=10; $i++){
    $r = $n * $i;
    echo $n." x ".$i." = ".$r."<br />";
  }
}
?>
    

