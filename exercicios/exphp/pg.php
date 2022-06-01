<html>
<title>TESTE.HTML</title>
<body>
    <h1> TESTANDO COMANDOS CSS</h1>
    <p>
        PHP inserir o CSS e depois chamar ele por include, require ou require_once que são chamadas 
        de arquivos nativas do PHP, no cabeçalho HTML do arquivo. Cria um arquivo estilo. php por 
        exemplo e dentro faz a chamada de CSS como se fosse inserir o códido CSS no cabeçalho do HTML. 
        Aqui vai o CSS usado.
        <form method="post">
            <h3>Entendeu? <br></h3>
            <h1><input type="checkbox" name="viajar" value="Viajar"> SIM<br></h1>
            <h2><input type="submit" name="enviar"></h2>
        </form>

    </P>
    
</body>

    <style> type="text/css">
        body{background:rgb(05, 38, 31)}
        h1{color:rgb(226, 60, 87);font-family:'Impact'}
		h2{color:white;text-decoration: underline;}
		h3{color:green;font-style: italic;}
		h4{color:rgb(224, 225, 208);font-size: 60px;}
		h5{color:blue;background:red;}
		h6{color:white;text-align:center;}	
        p{color:rgb(73, 8, 8);font-size:small;text-align:justify;}
        
        
    </style>
</html>

<?php
    //If form was submitted
    if (isset($_POST['enviar'])) {
        if (isset($_POST['viajar'])) {
            echo "Parabens!";
        }
        else {
            echo "Reveja o conteudo!";
        }
    }
?>
