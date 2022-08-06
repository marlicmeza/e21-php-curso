<!-- ephp_025.php -->
<!-- Crie um programa que pede ao usuário um número qualquer, em seguida retorno se este número é 
primo ou não, caso não, retorne também quantas vezes esse número é divisível. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ephp025</title>
</head>
<body>
    <form method="post" action="">
             Digite um número: <input type="number" name="num">             
             <input type="submit"> 
    </form>
    </body>
</html>
<?php
echo '<br>';
if (!empty($_REQUEST['num'])) {
    $n = $_REQUEST['num'];
    $num = $_POST['num'];
    echo 'O nome digitado é: ' . $num;
    echo "<br>";
}
  $n = $_POST['num'];
  $divisores = 0;
  
  for($count=2; $count<$n; $count++)
   if($n % $count == 0){
    echo "Multiplo de $count<br />";
    $divisores++;
   }
   if($divisores){
    echo "Não é PRIMO tem $divisores divisores além de 1 e ele mesmo.";
   } else {
    echo "É primo!";
   }    
   
 ?>