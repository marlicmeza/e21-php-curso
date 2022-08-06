<!-- ephp_026.php -->
<!-- Crie um programa que pede ao usuario uma frase ou palavra, verifique se a frase é palindromo ou não. 
E exiba o resultado. : A base do teto desaba. A cara rajada da jararaca. Acuda cadela da Leda caduca. 
A dama admirou o rim da amada. A Daniela ama a lei? Nada! Adias a data da saída. 
A diva em Argel alegra-me a vida. A droga do dote é todo da gorda. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ephp026_Palindromo</title>
</head>
<body>
    <form method="post" action="">
             Digite uma frase: <input type="text" name="frase">             
             <input type="submit"> 
    </form>
    </body>
</html>
<?php
echo '<br>';
if (!empty($_REQUEST['frase'])) {
    $n = $_REQUEST['frase'];
    $frase = $_POST['frase'];
    echo 'A frase digitada é: ' . $frase;
    echo '<br>';
}
$a = $_POST['frase'];
$b = strrev($a);

$string_reverse = str_split($b);

$palin = '';

foreach ($string_reverse as $value) {
    $palin .= $value;
}

if ($a == $palin) {
    echo '<br>A base do teto desaba. A cara rajada da jararaca. Acuda cadela da Leda caduca. A dama admirou o rim da amada. A Daniela ama a lei? Nada! Adias a data da saída. A diva em Argel alegra-me a vida. A droga do dote é todo da gorda';
} else {
    print '<br>A palabra digitada não é Palindrome.';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ephp026_Palindromo</title>
</head>
<body>
    <form method="post" action="">
             Digite uma frase: <input type="text" name="frase">             
             <input type="submit"> 
    </form>
    </body>
</html>
<?php
echo '<br>';
if (!empty($_REQUEST['frase'])) {
    $n = $_REQUEST['frase'];
    $frase = $_POST['frase'];
    echo 'A frase digitada é: ' . $frase;
    echo '<br>';
}
$a = $_POST['frase'];
$b = strrev($a);

$string_reverse = str_split($b);

$palin = '';

foreach ($string_reverse as $value) {
    $palin .= $value;
}

if ($a == $palin) {
    echo '<br>A base do teto desaba. A cara rajada da jararaca. Acuda cadela da Leda caduca. A dama admirou o rim da amada. A Daniela ama a lei? Nada! Adias a data da saída. A diva em Argel alegra-me a vida. A droga do dote é todo da gorda' . $str = strtoupper($str);
} else {
    print '<br>A palabra digitada não é Palindrome.';
}

?>
        

         