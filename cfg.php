<?php
// Połączenie z bazą danych MySQL
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "moja_strona";

$conn = new mysqli($servername, $username, $password, $dbname);

// Sprawdzenie połączenia
if ($conn->connect_error) {
    die("<p class='error'>Błąd połączenia z bazą danych: " . $conn->connect_error . "</p>");
}
?>
