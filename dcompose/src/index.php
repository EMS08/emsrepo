<!DOCTYPE html>
<html>
<body>
<h1>Hola Soy Esteban Montero Sánchez 2022-0376</h1>
<?php

$servername = "db";
$username = getenv('MYSQL_USER');
$password = getenv('MYSQL_PASSWORD');
$dbname = getenv('MYSQL_DATABASE');

// Crea la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica la conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected to MySQL successfully";
$conn->close();
?>
</body>
</html>
