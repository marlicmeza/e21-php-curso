<!-- Crie um cadastro de Pessoas com 5 pessoas utilizando Array. 
Cada pessoa deve ter os seguintes valores cadastrados: 
Nome, idade, Cep. A Chave primeria da Array será o numero 1,2,3,4,5. -->
<?php

$Arrays = array(
    "1" => array(
	    'nome' => 'Sol',	
	    'idade' => 50,
	    'cep' => '88390-000',
	),

    "2" => array(
	    'nome' => 'Lua',	
	    'idade' => 40,
	    'cep' => '90390-000',	
    ),

    "3" => array(
	    'nome' => 'Marte',	
	    'idade' => 30,
	    'cep' => '70390-000',	
    ),

    "4" => array(
	    'nome' => 'Plutão',	
	    'idade' => 20,
	    'cep' => '30390-000',	
    ),

    "5" => array(
	    'nome' => 'Plutão',	
	    'idade' => 10,
	    'cep' => '20390-000',	
    ),
      
)

?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ephp_028</title>
    </head>
    <body>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
             Digite nome: <input type="text" name="nome" required>
             Digite idade: <input type="number" name="idade" required>
             Digite cep: <input type="number" name="cep" required>
             <input type="submit"> 
        </form>
    </body>
    <?php 
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$cep = $_POST['cep'];

    if ($_SERVER['REQUEST_METHOD'] == 'post') {
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];    
        $cep = $_POST['cep'];
        $array = array_merge($nome, $idade, $cep);
        array_push($erro, "Erro 1");
        
        echo $array;
    }
?>
</html>

<?php
echo "<br><br>";
echo $array;
echo $nome;



$dados = array(
   "1" => array ("nome" => "Sol", "idade" => 20, "cep" => 88390-000, "<br>"),
   "2" => array("nome" => "Lua", "idade" => 21, "cep" => 90300-000,"<br>"),
   "3" => array("nome" => "Marte", "idade" => 22, "cep" => 70360-000,"<br>"),
   "4" => array("nome" => "Jupter", "idade" => 23, "cep" => 45060-000,"<br>"),
   "5" => array("nome" => "Plutão", "idade" => 24, "cep" => 60582-000, "<br>"),
);
// foreach ($array as $key => $value){
//     foreach ($vale, as $item => $a){

//     }
// }

print_r($dados);
print_r($array);
?>




