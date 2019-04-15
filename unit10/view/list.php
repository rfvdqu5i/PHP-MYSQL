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
        <h2 align="center">DANH SÁCH NHÂN VIÊN</h2>
<!--        <a href="product.php" class="btn btn-primary">Trang chủ</a>-->
        <table class="table">
            <thead>
                <tr>
                    <th>Mã nhân viên</th>
                    <th>Tên nhân viên</th>
                    <th>Ảnh</th>
                    <th>Email</th>
                    <th>Số điện thoại</th>
                    <th>Địa chỉ</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($data as $row) { 
                ?>
                <tr>
                    <td><?= $row['CODE'] ?></td>
                    <td><?= $row['NAME'] ?></td>
                    <td><img src="public/img/<?= $row['IMG'] ?>" alt="" width="50px"></td>
                    <td><?= $row['EMAIL'] ?></td>
                    <td><?= $row['MOBILE'] ?></td>
                    <td><?= $row['ADDRESS'] ?></td>
                    <td><a href="?mod=employee&act=detail&code=<?= $row['CODE'] ?>" class="btn btn-danger">Detail</a></td>
                    <td><a href="#" class="btn btn-danger">Upgrade</a></td>
                    <td><a href="#" class="btn btn-danger">Delete</a></td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>
