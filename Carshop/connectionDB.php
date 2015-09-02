<?php
$servername = 'localhost';
$username = 'root';
$password = '';

$conn = new mysqli($servername, $username, $password, 'storecars');
mysqli_set_charset($conn, "utf8");
if ($conn->connect_error) {
    echo 'Connection Failed:' . $conn->connect_error;
}
?>