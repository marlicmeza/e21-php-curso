<html>

<body>
    <form method="post">
        <h3>Nas férias gosto de: <br></h3>
        <h1><input type="checkbox" name="viajar" value="Viajar"> Viajar<br></h1>
        <h2><input type="submit" name="enviar"></h2>
    </form>

    <?php
    //If form was submitted
    if (isset($_POST['enviar'])) {
        if (isset($_POST['viajar'])) {
            echo "Nas férias gosto de viajar";
        }
        else {
            echo "Nas férias não gosto de viajar, fico em casa";
        }
    }
    ?>
    <style> type="text/css">
        body{background:rgb(05, 38, 31)}
        h1{color:rgb(226, 60, 87);font-family:'Impact'}
		h2{color:white;text-decoration: underline;}
		h3{color:green;font-style: italic;}
		h4{color:rgb(224, 225, 208);font-size: 60px;}
		h5{color:blue;background:red;}
		h6{color:white;text-align:center;}	

        .box {
            display: flex;
            align-items: center;
            flex-flow: row wrap;
            justify-content: center;
        }
        .one {
            flex: 1 1 auto;
        }
    </style>
</body>

</html>