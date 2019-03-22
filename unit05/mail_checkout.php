<?php
    session_start();
    $products = $_SESSION['cart'];
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
        
        <table class="table">
            <caption>GIỎ HÀNG</caption>
            <thead>
                <tr>
                    <th>STT</th>
                    <th>MÃ SẢN PHẨM</th>
                    <th>TÊN SẢN PHẨM</th>
                    <th>ĐƠN GIÁ</th>
                    <th>SỐ LƯỢNG</th>
                    <th>THÀNH TIỀN</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $i = 0;
                $tong_tien = 0;
                foreach ($products as $key => $product) {
                    $i++;
                    $tong_tien += $product['DonGia'] * $product['SoLuong'];
            ?> 
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $key ?></td>
                    <td><?= $product['TenSP'] ?></td>
                    <td><?= $product['DonGia'] ?></td>
                    <td><?= $product['SoLuong'] ?></td>
                    <td><?= number_format($product['DonGia'] * $product['SoLuong']) ?></td>    
                </tr>
                
            <?php
                }
            ?>
                <tr>
                    <td colspan="5">TỔNG TIỀN</td>
                    <td><?= number_format($tong_tien) ?></td>
                </tr>
            </tbody>
            
        </table>
        
    </div>

</body>

</html>
