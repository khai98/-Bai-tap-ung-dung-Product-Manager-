<?php
require 'database.php';

if ($_GET['name']) {
    $name = $_GET['name'];
}
if ($_GET['code']) {
    $code = $_GET['code'];
}
if ($_GET['price']) {
    $price = $_GET['price'];
}
if ($_GET['category_id']) {
    $category_id = $_GET['category_id'];
}

$insert = "INSERT INTO products (`name`, code, price, category_id) VALUES ('$name',$code , $price ,$category_id)";
$adds = $conn->query($insert);
header("Location: http://localhost:8888/WebPHP/Bai5/template.php");
?>


