<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'huberik_pd';

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Błąd połączenia z bazą danych: " . mysqli_connect_error());
}

mysqli_set_charset($conn, "utf8");
?>