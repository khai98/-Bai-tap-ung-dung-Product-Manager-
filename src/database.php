<?php
$server = "localhost";
$username = "root";
$password = "root";
try {
    $conn = new PDO("mysql:host=$server;dbname=productmanager", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>

