<?php
session_start();
require_once('cadastro.php'); 
echo "Ola, Bem vindo!" . $user;
?>
 

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./formato.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./formato.css"> 
    <title>PAGINA2</title>
        </head>
            <body>
                <h1>VERIFICAÇAO DE CADASTRO</H1>
                <br>
                <form method="post">
                     <fieldset>
                        <legend>CADASTRAR</legend>
                        Digite uma frase: <input type="text" name="frase" required placeholder="Digite uma frase:">                        
                        <button input type="submit" name="enviar"> Enviar </button>
                     </fieldset>
                </form>
                 
    
<?php 
echo "<br><br>";
if (isset($_POST['enviar'])) {
    $frase = $_POST['frase'];
    echo "A frase digitada foi:" .$frase; 
    echo "<br>";
    echo "Voce sera direcionado" .$tt;  

    header("refresh: $tt ;pag3.php");
} 

    
?>  

</body>
</html>