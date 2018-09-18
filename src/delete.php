<?php
require 'database.php';

if ($_GET['delete']) {
    $deletes = $_GET['delete'];
    $delete = "DELETE FROM products WHERE id='$deletes'";
    $products = $conn->query($delete);

    header("Location: http://localhost:8888/WebPHP/Bai5/template.php");
}
?>