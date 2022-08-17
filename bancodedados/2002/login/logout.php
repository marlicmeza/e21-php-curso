<head>
    <link rel="stylesheet" href="style/logado.css">
    <meta charset="UTF-8">
    <title>Você está logado</title>
</head>
    <body>
        <form method="post">
         <?php  if($_SESSION['logado'])
            {
          echo "<input type='submit' name='logout' value='Logout'>";
            } ?>
        </form>
    </body>
<?php

if (isset($_POST['logout'])) {
    $_SESSION['logado'] = false;
    header('Location: logar.php');
}

?>