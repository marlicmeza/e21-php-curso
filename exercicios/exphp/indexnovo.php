<head>
    <title> html css php</title>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <style type="text/css">
        body{background:rgb(187, 210, 232)}
        h1{color:rgb(133, 22, 40);font-family:'Impact'; font-size:60px}
		h2{color:white;text-decoration: underline;}
		h3{color:green;font-style: italic;}
		h4{color:rgb(224, 225, 208);font-size: 60px;}
		h5{color:rgb(41, 10, 151);background:red;}
		h6{color:rgb(31, 22, 22);text-align:center;}	

        .box {
            font-size:20px;
            display: flex;
            align-items: center;
            flex-flow: row wrap;
            justify-content: center;
            
        }
        .one {
            flex: 1 1 auto;
        }
    </style>
</head>
<body>


<?php
$path = "./";
$diretorio = scandir($path);
echo '<div class="box">';
echo "<div><h1>Indice de arquivos de aula<h1></div>";
echo '</div>';
$x = 0;

echo '<div class="box" >';
foreach ($diretorio as $arquivo) {
    if ($x == 0) {
        echo '<div class="one">';
    }
    echo '<br><a href="' . $path . $arquivo . '">' . "    " . $arquivo . "    " . '</a>';
    $x++;
    if ($x > 10) {
        echo '</div>';
        $x = 0;
    }
}
echo "</div>";


?>
</body>
</html>