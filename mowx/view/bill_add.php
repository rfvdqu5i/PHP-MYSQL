<?php
        if(isset($_COOKIE['add_failed'])) {
    ?>
<script type="text/javascript">
    toastr["error"]("Thêm mới thất bại", "Thông báo: ");

</script>
<?php 
        } else if(isset($_COOKIE['edit_failed'])) {
    ?>
<script type="text/javascript">
    toastr["error"]("Sửa thất bại", "Thông báo: ");

</script>
<?php
        } 
    ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Thêm mới hóa đơn</title>
    <link href="../public/css/bootstrap.min.css" rel="stylesheet">
    <link href="../public/css/font-awesome.min.css" rel="stylesheet">
    <link href="../public/css/datepicker3.css" rel="stylesheet">
    <link href="../public/css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!--Custom Font-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
</head>

<body>
    <?php include_once('view/header.php'); ?>

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <h3 align="center">THÊM MỚI HÓA ĐƠN</h3>
        <hr>
        <a href="?mod=bill&act=list" class="btn btn-primary">Danh sách</a>
        <hr>

        <form action="?mod=bill&act=insert" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Mã hóa đơn</label>
                <input type="text" class="form-control" id="" placeholder="Mã hóa đơn" name="bill_code" required>
            </div>
            <div class="form-group">
                <label for="">Mã khách hàng</label>
                <input type="text" class="form-control" id="" placeholder="Mã khách hàng" name="customer_code" required>
            </div>
            <div class="form-group">
                <label for="">Tổng tiền</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào tổng tiền" name="total_money">
            </div>
            <div class="form-group">
                <label for="">Thời gian</label>
                <input type="date" class="form-control" id="" name="time_bill">
            </div>
            <div class="form-group">
                <label for="">Mã nhân viên</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào mã nhân viên" name="employee_code">
            </div>
            <div class="form-group">
                <label for="">Funds</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào funds" name="funds">
            </div>
            <div class="form-group">
                <label for="">Trạng thái</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào trạng thái" name="statuss">
            </div>

            <button type="submit" class="btn btn-primary">Lưu thông tin</button>
        </form>
    </div>
</body>

</html>
