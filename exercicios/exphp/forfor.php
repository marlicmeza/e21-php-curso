<html>
    <body>
        <style type = "text/css">
         hr {
            border: 1px dotted rgb(234, 0, 255); /* dotted, dashed e solid são formatos de linhas.*/
            border: 2px dashed rgb(255, 0, 98);
            border: 3px dotted rgb(234, 0, 255);
            width:60px;
            margin-left:0px;
        }
        </style>
    </body</html>

<?php
for ($i = 10; $i >= 1; $i --){
    echo"<br><hr>"; //<hr> cria uma linha horizontal
    for ($j = 10; $j >= 1; $j--){
        print "<BR> I: $i, J: $j";
        echo "<br>";
    }
}
    
    
 //REFAZER COM CONTAEM REGRESSIVA

?>