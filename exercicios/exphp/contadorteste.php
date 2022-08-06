<!-- <?php
$t= time();
$f= $t/3600;
echo $t;
echo "<br>";
echo $f;

?>
<!doctype html>
<html>
<head>
<title>Contador em PHP</title>
<script type=”text/javascript” src=”jquery.js”></script>
<script type=”text/javascript”>
$(document).ready(function(){

// Requisicao AJAX
var requisicao = function(){
$.ajax({
url: “contador.php”
}).done(function(resultado){
// Exibe o resultado no elemento com ID contador
$(“#contador”).html(resultado);
});
};

// Executa a requisicao com intervalo de 100ms
setInterval(requisicao, 100);

});

</script>
</head>
<body>
<p>Faltam <span id=”contador”></span> segundos para o fim do mundo!</p>
</body>
</html>
<?php

// Define as datas
$hor1 =hora ('h:i:s');
$hor2 =hora ('h:i:s');
// Converte as datas para a hora UNIX e realiza o calculo da diferenca
//$diferenca = ($hor1) – ($hor2);

// Exibe o resultado se ele for positivo. Caso seja negativo, exibe 0.
echo ($diferenca >= 0) ? $diferenca : 0;

?> -->

<html>
    <body>
        
<?php echo 15,"<div id='seconds-counter'; function incrementSeconds></div>"?>;    
        <?php echo 14;
           echo '<script type="text/JavaScript">
           var el = document.getElementById("seconds-counter");
           
           function incrementSeconds() {
               el.innerText = -1;
           }
           
           var cancel = setInterval(incrementSeconds, 1000);
           </script>'
        ?>

        

    </body>



</html>



