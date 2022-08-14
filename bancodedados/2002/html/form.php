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
                       
                        <button input type="submit" name="listar"> Listar </button>
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
    
