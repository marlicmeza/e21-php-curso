<!-- Tipo de variáveis  :  recurso ou resource -->
<?php
$servename = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    echo "vou morrer ou exit";
    die("Connection failed: " . sconn->connect_error);
}
echo "Connected successfully";
?>