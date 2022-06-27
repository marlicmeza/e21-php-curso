<?php
session_start ();
require_once 'cadastro.php';


?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./formato.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./formato.css"> 
    <title>login</title>
        </head>
            <body>
                <form method="post">
                     <fieldset>
                        <legend>LOGIN</legend>                        
                        Usuario: <input type="text" name="login" required placeholder="Digite o usuario:">
                        Senha: <input type="password" name="senha" required placeholder="Digite a senha:">                        
                        <button input type="submit" name="enviar"> Login </button>                       
                    </fieldset>
                </form>
                    
<?php 
echo "<br><br>";

if (isset($_POST['enviar'])) {
$login=($_POST['login']);
$senha=($_POST['senha']);

    if ($login == $user && $senha == $pass){
        echo " VC ESTA LOGADO ";
        header("refresh: $tt ;pag2.php");
    }
    else{
        echo "Usuario ou senha incorreto! <br>";
        echo "Tente novamente.";
        header("refresh: $tt ;login.php");
    }
}   

?>
</body>
</html>