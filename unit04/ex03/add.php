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
    <header>
        <center><h1>ZENT GROUP - PHP - Thực hành về gửi dữ liệu dùng POST</h1></center>
        <hr>
    </header>
    <div class="container">
        <form action="post.php" method="POST" role="form">
            <div class="form-group">
                <label for="">Mã sinh viên</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào mã sinh viên" name="id" required>
            </div>
            
            <div class="form-group">
                <label for="">Họ và tên</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào họ và tên" name="name" required>
            </div>
            
            <div class="form-group">
                <label for="">Số điện thoại</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào số điện thoại" name="phone" required>
            </div>  
            
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" class="form-control" id="" placeholder="Nhập vào email" name="email" required>
            </div>
            
            <div class="form-group">
                <label for="">Giới tính</label>
                <br>
                <input type="radio"  id=""  name="male" value="Male"> Male
                <input type="radio"  id=""  name="female" value="Female"> Female
                <input type="radio"  id=""  name="other" value="Other"> Other
            </div>
            
            <div class="form-group">
                <label for="">Địa chỉ</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào địa chỉ" name="address" required>
            </div>
            
            <button type="submit" name="btn" class="btn btn-primary">Lưu thông tin</button>
        </form>
    </div>
</body>
</html>