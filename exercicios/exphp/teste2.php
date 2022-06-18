<html align="center">
    <form action="" method="post">
        <input type="text" name="registration_position" value="Número de cadastro" onfocus="this.value=''">
        <input type="submit" name="delete" value="Deletar">
    </form>

    <?php
        session_start();
        require_once('teste3.php');

        if (!$_SESSION["dadosarray"])
            $_SESSION['dadosarray'] = $registration;

        if (isset($_POST['delete']))
            unset($_SESSION['dadosarray'][$_POST['registration_position']]); // Deletes an array position

        foreach ($_SESSION['dadosarray'] as $key => $value)
        {
            echo "$key: <br>";
            foreach ($value as $val)
                echo "$val <br>";
            echo "<br>";
        }
    ?>
</html>