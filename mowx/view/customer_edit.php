<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chỉnh sửa khách hàng</title>
    <link href="public/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/css/font-awesome.min.css" rel="stylesheet">
    <link href="public/css/datepicker3.css" rel="stylesheet">
    <link href="public/css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!--Custom Font-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
</head>

<body>
    <?php include_once('view/layout/headerAdmin.php'); ?>

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <h3 align="center">CHỈNH SỬA KHÁCH HÁNG</h3>
        <hr>
        <a href="?mod=customer&act=list" class="btn btn-primary">Danh sách</a>
        <hr>

        <form action="?mod=customer&act=update" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">#</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào sản phẩm" name="customer_code" readonly required value="<?= $customer['customer_code'] ?>">
            </div>
            <div class="form-group">
                <label for="">Tên khách hàng</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào tên sản phẩm" name="customer_name" value="<?= $customer['customer_name'] ?>">
            </div>
            <div class="form-group">
                <label for="">Sinh nhật</label>
                <input type="date" class="form-control" id="" name="customer_birthday" value="<?= $customer['customer_birthday'] ?>">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" class="form-control" id="" placeholder="Nhập vào email" name="customer_email" value="<?= $customer['customer_email'] ?>">
            </div>
            <div class="form-group">
                <label for="">Số điện thoại</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào số điện thoại" name="customer_mobile" value="<?= $customer['customer_mobile'] ?>">
            </div>
            <div class="form-group">
                <label for="">Địa chỉ</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào địa chỉ" name="customer_address" value="<?= $customer['customer_address'] ?>">
            </div>

            <button type="submit" class="btn btn-primary">Lưu thông tin</button>
            <br> <br>
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
