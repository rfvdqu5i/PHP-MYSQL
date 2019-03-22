<?php
    session_start();
    include('data.php');
//    session_destroy();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <a href="cart.php">Xem giỏ hàng</a>
        <table class="table">
            <caption>DANH SÁCH SẢN PHẨM</caption>
            <thead>
                <tr>
                    <th>STT</th>
                    <th>MÃ SẢN PHẨM</th>
                    <th>TÊN SẢN PHẨM</th>
                    <th>HÌNH ẢNH</th>
                    <th>ĐƠN GIÁ</th>
                    <th>SỐ LƯỢNG</th>
                    <th>#</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $i = 0;
                foreach ($products as $key => $product) {
                    $i++;
            ?> 
        
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $key ?></td>
                    <td><?= $product['TenSP'] ?></td>
                    <td><img src="<?= $product['image'] ?>" alt="" width="50px"></td>
                    <td><?= $product['DonGia'] ?></td>
                    <td><?= $product['SoLuong'] ?></td>
                    <td><a href="add2cart.php?MaSP=<?= $key ?>">Thêm vào giỏ hàng</a></td>
                </tr>
            <?php
                }
            ?>
            </tbody>
            
        </table>
    </div>

</body>

</html>
