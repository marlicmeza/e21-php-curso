<!-- e005.php -->

<!-- 
    Variaveis ficam armazenadas na RAM
    Nunca: 
        - inicializar com numeros
        - utilize espaços em branco
        -*&$#@!)(*{}][])
    Evite:
        - nome da variavel maior que 15 characteres
        - nunca maior que 255  
    Faça:
        - nome significativo x,y,t,i,m,n,b,a  a
    Detalhe: 
        - Variaveis em PHP são case-sensitive
    -->


    <?php
$a = "conteudo da variavel";
// Isto representa etc. e tal sobre o app x
$codigo_cliente = "";
$nome = "Maria";
$sobrenome = 'da Silva';
echo "$sobrenome, $nome <br>"; // certo assim 
Echo "$SOBRENOME, $nome <br>"; // certo apenas o comando Echo, não as variaveis. 
ECHO "$sobrenome, $Nome <br>"; // certo apenas o comando Echo, não as variaveis. 
?>