
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <script src="https://www.google.com/recaptcha/api.js?hl=vi"></script>
</head>

<body>
    <center>
        <h2>THANH TOÁN</h2>
        <hr>
    </center>
    <form class="container" action="process_sendmail.php" method="post">
        <div class="form-group">
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nhập tên của bạn">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nhập số điện thoại của bạn">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nhập địa chỉ của bạn">
        </div>
        <div class="form-group">
            <input type="mail" name="email" class="form-control" id="exampleInputPassword1" placeholder="Nhập email">
        </div>
        <div class="g-recaptcha" data-sitekey="6LePzZgUAAAAAD6yiuGTVnAxtajBZHE0PbfKOOPm"></div>
        <button type="submit" name="submit" class="btn btn-primary">Thanh toán</button>
    </form>
</body>

</html>
