<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TESTANDO0</title>
    </head>
    <body>
        <form method="post" action="" >
             Digite nome: <input type="text" name="nome" required>
             Digite idade: <input type="number" name="idade" required>
             Digite cep: <input type="number" name="cep" required>
             <input type="submit"> 
        </form>
    </body>
    

</html>

<?php

// $numArray = 9;
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];    
    $cep = $_POST['cep'];      
    print_r($_POST);
    var_dump ($_POST);
}
echo "to aqui";

echo "<br><br>";
$dados = array(
   "1" => array ("nome" => "Sol", "idade" => 20, "cep" => 88390-000, "<br>"),
   "2" => array("nome" => "Lua", "idade" => 21, "cep" => 90300-000,"<br>"),
   "3" => array("nome" => "Marte", "idade" => 22, "cep" => 70360-000,"<br>"),
   "4" => array("nome" => "Jupter", "idade" => 23, "cep" => 45060-000,"<br>"),
   "5" => array("nome" => "Plutão", "idade" => 24, "cep" => 60582-000, "<br>"),
   
);

// $numArray = $numArray + 1;
// foreach ($array as $key => $value){
//     foreach ($vale, as $item => $a){

//     }
// }

print_r($dados);

?>


