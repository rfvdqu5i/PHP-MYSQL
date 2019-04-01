<?php

require_once('connection.php');
$CODE = $_GET['CODE'];
$query = "SELECT * FROM products WHERE CODE='".$CODE."' ";
$result = $conn->query($query);
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Zent Group</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <h2 align="center">DANH SÁCH SẢN PHẨM</h2>
        <a href="product.php" class="btn btn-primary">Trang chủ</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Mã sản phẩm</th>
                    <th>Tên sản phẩm</th>
                    <th>Ảnh sản phẩm</th>
                    <th>Giá bán</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($row = $result->fetch_assoc()) { 
                ?>
                <tr>
                    <td><?= $row['CODE'] ?></td>
                    <td><?= $row['NAME'] ?></td>
                    <td><img src="images/products/<?= $row['PICTURE'] ?>" alt="" width="50px"></td>
                    <td><?= number_format($row['PRICE']) ?></td>
                    <td><a href="#" class="btn btn-danger">Mua hàng</a></td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>
