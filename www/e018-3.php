<!-- e018_3 -->
<!-- Operadores Relacionais -->

if ($a == $b) 
==                  Igual ? 
!= ou <>            Diferente
<
>
<=
>=

<?php
echo "Comparando apenas o conteudo<br>";
$a = 1234;
$b = '1234';
echo "<br>";
if ($a == $b){
    echo '$a e $b sao iguais';
}
else if ($a != $b){
    echo '$a e $b são diferentes';
}
?>

<?php
echo "Comparando o conteudo e o tipo de variavel<br>";
echo "<br>";
$c = 1234;
$d = '1234';
if ($c === $d){
    echo '$c e $d são iguais e do mesmo tipo';    
} 

if ($c !== $d){
    echo '$c e $d são de tipos diferentes';
}

?>


<?php
echo "<br>-------------------<br>";
$e = 0;
if ($e == FALSE){
    echo '$e é falso';
    echo '<br>';
}
if ($e === FALSE){
    echo '$e é FALSE e do tipo boolean';
    echo '<br>';
}
if ($e === 0){
    echo '$e é zero mesmo kkk';
    echo '<br>';}

?>