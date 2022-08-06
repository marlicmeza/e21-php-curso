<!-- ex  
27. Crie um programa que pede ao usuario uma frase 
ou palavra, verifique se a frase é palindromo ou não. 
E exiba o resultado. : A base do teto desaba. A cara 
rajada da jararaca. Acuda cadela da Leda caduca. A 
dama admirou o rim da amada. A Daniela ama a lei? Nada! 
Adias a data da saída. A diva em Argel alegra-me a vida. 
A droga do dote é todo da gorda. https://www.todamateria.com.br/palindromo/
-->

<html>

<head>
</head>

<body>
    <form method="post">
        Verificador de Palindromo: <input type="text" name="input_user1">
        <input type="submit">
    </form>
</body>

</html>
<?php
$str = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $str = $_POST['input_user1'];
    $a = array(
        'ä', 'ã', 'à', 'á',
        'â', 'ê', 'ë', 'è',
        'é', 'ï', 'ì', 'í',
        'ö', 'õ', 'ò', 'ó',
        'ô', 'ü', 'ù', 'ú',
        'û', 'À', 'Á', 'É',
        'Í', 'Ó', 'Ú', 'ñ',
        'Ñ', 'ç', 'Ç', ' ',
        '-', '(', ')', ',',
        ';', ':', '|', '!',
        '"', '#', '$', '%',
        '&', '/', '=', '?',
        '~', '^', '>', '<',
        'ª', 'º'
    );
    $b = array( 'a','a','a','a',
    'a','e','e','e',
    'e','i','i','i',
    'o','o','o','o',
    'o','u','u','u',
    'u','A','A','E',
    'I','O','U','n',
    'n','c','C','',
    '','','','',
    '','','','',
    '','','','',
    '','','','',
    '','','','',
    '','' 
);

    $string = str_replace($a, $b, strtolower(trim($str)));

    if (strrev($string) == $string) {
        echo "A Frase:<br> $str --> é um palindromo.";
    } else {
        echo "A Frase:<br> $str --> não é um palindromo.";
    }
}

?>