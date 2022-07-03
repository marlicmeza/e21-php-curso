<?php
session_start();
require_once 'dados.php';
// require_once 'calc.php'; 
?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./formato.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./formato.css"> 
    <title>BASE</title>
        </head>
            <body>
                <h1>TELA DE CADASTRO E ALTERAÇÃO</H1>
                <br>
                <form method="post">
                     <fieldset>
                        <legend>CADASTRAR</legend>
                        <label>Nome : </label>
                        Digite nome: <input type="text" name="nome" placeholder="Digite o nome:">
                        <label>Idade </label>
                        Digite idade: <input type="number" name="idade" placeholder="Digite a idade:">
                        <label>Cep </label>
                        Digite cep: <input type="number" name="cep" placeholder="Digite o cep:">
                        <label>Saldo </label>
                        Digite saldo: <input type="number" name="saldo" placeholder="Digite o saldo:">
                        <br>
                        <button input type="submit" name="enviar"> Cadastrar </button>
                        <button input type="submit" name="restaurar"> Restaurar dados </button>
                    </fieldset>
                </form>
                    <table>
                    <tr id="titulo">
                    </tr>                     
                    <tr id="titulo">
                    <td>Nome</td>
                    <td>Idade</td>
                    <td>Cep</td>
                    <td>Saldo</td>
                    <td>Excluir</td>
                    <td>Alterar</td>
                    </tr>
    
<?php 
echo "<br><br>";
if (isset($_POST['enviar'])) {
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $cep = $_POST['cep'];
    $saldo = $_POST['saldo'];

    $cadnovo= array(
        "nome" => $nome,
        "idade" => $idade,
        "cep" => $cep,
        "saldo" => $saldo
    );
    array_push($_SESSION['dadosarray'], $cadnovo);
} 
if (isset($_POST['restaurar'])) {
    $_SESSION['dadosarray'] = $dadosarray;
}
   require_once('imprimir.php');

   $saldo_total = 0;
   $total_dados = count($_SESSION['dadosarray']);
   $total_idade = 0;
   foreach ($_SESSION['dadosarray'] as $cadastro){
       $saldo_total += $cadastro['saldo'];
       $total_idade += $cadastro['idade'];
       }
   $media_idade = ($total_idade / $total_dados); 

?>
   
    
  
?>  
</table>
</body>
<footer>
    <h3>Total de dados = <?php echo $total_dados;?></h3>
    <h3>Total em carteira = <?php echo "R$: " .$saldo_total;?></h3>
    <h3>Média de idade = <?php echo $media_idade;?></h3>
    <div>
        <line>---</line>
        <p> by Marli Meza</p>
        <line>---</line>
    </div>
</footer>
</html>

