<?php
require_once('connection.php');

if (isset($_GET['TYPE_CODE'])) {
    $TYPE_CODE = $_GET['TYPE_CODE'];
    $query = "SELECT products.*,products_type.TYPE_NAME FROM products JOIN products_type ON products.PRODUCT_TYPES = products_type.TYPE_CODE WHERE TYPE_CODE = '".$TYPE_CODE."' ";
} else {
    $query = "SELECT products.*,products_type.TYPE_NAME FROM products JOIN products_type ON products.PRODUCT_TYPES = products_type.TYPE_CODE";
}

$query_pt = "SELECT * FROM products_type";
$result = $conn->query($query);
$result_pt = $conn->query($query_pt);

$data = array();
while($row = $result->fetch_assoc()) { 
    $data[] = $row;
}

$data_pt = array();
    while($row_pt = $result_pt->fetch_assoc()) { 
        $data_pt[] = $row_pt;
    }
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
        <?php 
            foreach ($data_pt as $row_pt) { 
        ?>
            <a href="product.php?TYPE_CODE=<?= $row_pt['TYPE_CODE'] ?>"> <?= $row_pt['TYPE_NAME'] ?> </a>
        <?php 
            } 
        ?>
            
        <table class="table">
            <thead>
                <tr>
                    <th>Mã sản phẩm</th>
                    <th>Tên sản phẩm</th>
                    <th>Ảnh sản phẩm</th>
                    <th>Loại sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($data as $row) {
                ?>
                <tr>
                    <td><?= $row['CODE'] ?></td>
                    <td><?= $row['NAME'] ?></td>
                    <td><img src="images/products/<?= $row['PICTURE'] ?>" alt="" width="50px"></td>
                    <td><?= $row['TYPE_NAME'] ?></td>
                    <td><?= $row['QUANTITY'] ?></td>
                    <td>
                        <a href="detail.php?CODE=<?= $row['CODE'] ?>" class="btn btn-success">Detail</a>
                        <a href="update.php" class="btn btn-warning">Update</a>
                        <a href="delete.php" class="btn btn-danger">Delete</a>

                    </td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>
