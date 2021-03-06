<?php
    require_once('connection.php');

    $query = "SELECT * FROM employees";
    $result = $conn->query($query);

    $data = array();

    while($row = $result->fetch_assoc()) { 
        $data[] = $row;
    }
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Danh sách nhân viên</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <h2 align="center">DANH SÁCH NHÂN VIÊN</h2>
        <br>
        <table id="myTable" class="table">
            <thead>
                <tr>
                    <th>Mã nhân viên</th>
                    <th>Tên nhân viên</th>
                    <th>Email</th>
                    <th>Số điện thoại</th>
                    <th>Địa chỉ</th>
                    <th>Mật khẩu</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($data as $row) { 
                ?>
                <tr>
                    <td><?= $row['code'] ?></td>
                    <td><?= $row['name'] ?></td>
                    <td><?= $row['email'] ?></td>
                    <td><?= $row['mobile'] ?></td>
                    <td><?= $row['address'] ?></td>
                    <td><?= md5($row['password']) ?></td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>
