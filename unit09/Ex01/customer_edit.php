<?php 
	include_once('connection.php');
     
     $CODE = $_GET['CODE'];

	$query = "SELECT * FROM customers WHERE CODE='".$CODE."' ";

     $result = $conn->query($query);
     $customer = $result->fetch_assoc();
		 
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
    <h3 align="center">ZENT GROUP - PHP - MYSQL</h3>
    <h3 align="center">UPDATE KHÁCH HÀNG</h3>
    <br>
    <a href="customer.php" class="btn btn-primary">Trang chủ</a>
    <hr>
        <form action="customer_edit_process.php" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Mã khách hàng</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào mã khách hàng" name="CODE" value="<?= $customer['CODE'] ?>">
            </div>
            <div class="form-group">
                <label for="">Tên nhân viên</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào tên khách hàng" name="NAME" value="<?= $customer['NAME'] ?>">
            </div>  
            <div class="form-group">
                <label for="">Ảnh khách hàng</label>
                <input type="file" accept="image/*" onchange="loadFile(event)" id="IMG" name="IMG">
                <br>
                <img id="output" width="50px" src="img/employees/<?= $customer['IMG'] ?> "> 
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào email" name="EMAIL" value="<?= $customer['EMAIL'] ?>">
            </div>
            <div class="form-group">
                <label for="">Số điện thoại</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào số điện thoại" name="MOBILE" value="<?= $customer['MOBILE'] ?>">
            </div>
            <div class="form-group">
                <label for="">Địa chỉ</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào địa chỉ" name="ADDRESS" value="<?= $customer['ADDRESS'] ?>">
            </div>
            
            <button type="submit" name="submit" class="btn btn-primary">Lưu thông tin</button>
            
        </form>
    </div>
    
    <script>
          var loadFile = function(event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
          };
    </script>
    
</body>
</html>