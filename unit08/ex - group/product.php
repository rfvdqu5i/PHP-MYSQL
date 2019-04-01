<?php
    require_once('connection.php');

    $query = "SELECT * FROM products";
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
    <title>Zent Group</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
</head>

<body>
    <div class="container">
        <h2 align="center">DANH SÁCH SẢN PHẨM</h2>

        <table id="myTable" class="table">
            <thead>
                <tr>
                    <th>Mã sản phẩm</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá</th>
                    <th>Chất lượng</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($data as $row) { 
                ?>
                <tr>
                    <td><?= $row['code'] ?></td>
                    <td><?= $row['name'] ?></td>
                    <td><?= $row['price'] ?></td>
                    <td><?= $row['quantity'] ?></td>
                    <td>
                        <a href="#" class="btn btn-success">Detail</a>
                        <a href="#" class="btn btn-warning">Update</a>
                        <a href="#" class="btn btn-danger">Delete</a>

                    </td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>
</body>

</html>
