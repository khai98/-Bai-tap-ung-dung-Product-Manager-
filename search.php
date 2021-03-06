<?php
/**
 * Created by PhpStorm.
 * User: hoangkhai
 * Date: 9/17/18
 * Time: 10:46 AM
 */
require 'src/database.php';

if ($_GET['search']) {
    $keyWord = $_GET['search'];
    $query = "SELECT * FROM products where name LIKE '%$keyWord%'";
    $products = $conn->query($query);
}
?>

<html>
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>
<body>
<div class="container ">
    <div class="row">
        <h2>Product Manager</h2>
        <div class="pull-right">
            <form method="GET" action="search.php">
                <input type="text" name="search">
                <input type="submit" value="Search" class="btn btn-primary">
            </form>
        </div>
    </div>
    <div class="row">
        <table class="table table-bordered table-striped">
            <thead>
            <tr class="bg-info">
                <th>id</th>
                <th>name</th>
                <th>code</th>
                <th>price</th>
                <th>category_id</th>
            </tr>
            </thead>
            <tbody id="list-itens">
            <?php foreach ($products as $product) : ?>
                <tr>
                    <td><?php echo $product['id'] ?></td>
                    <td><?php echo $product['name'] ?></td>
                    <td><?php echo $product['code'] ?></td>
                    <td><?php echo $product['price'] ?></td>
                    <td><?php echo $product['category_id'] ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

</body>
</html>
