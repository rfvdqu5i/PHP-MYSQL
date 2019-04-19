<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Zent Group</title>
    <!-- Latest compiled and minified CSS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>

<body>
    
    <?php
        if(isset($_COOKIE['add_success'])) {
    ?>
        <script type="text/javascript">
            toastr["success"]("Thêm mới thành công","Thông báo: ");
        </script>
        <?php 
            } else if(isset($_COOKIE['delete_success'])) {
        ?>
            <script type="text/javascript">
                toastr["success"]("Xóa thành công","Thông báo: ");
            </script>
        <?php 
            } else if(isset($_COOKIE['edit_success'])) {
        ?>
            <script type="text/javascript">
                toastr["success"]("Sửa thành công","Thông báo: ");
            </script>
    <?php
        } 
    ?>
    
    <div class="container">
        <h2 align="center">DANH SÁCH KHÁCH HÀNG</h2>
        <hr>
        <a href="?mod=customer&act=add" class="btn btn-primary">Thêm mới</a>
        <hr>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Tên khách hàng</th>
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
                    <td><?= $row['EMAIL'] ?></td>
                    <td><?= $row['MOBILE'] ?></td>
                    <td><?= $row['ADDRESS'] ?></td>
                    <td>
                        <a href="javasript:;" class="btn btn-primary btn-show" data-id="<?= $row['CODE'] ?>" data-toggle="modal" data-target="#exampleModalCenter"><i class="fas fa-eye"></i></a>
<!--                        <a href="?mod=customer&act=detail&code=<?= $row['CODE'] ?>" class="btn btn-primary"><i class="fas fa-eye"></i></a>-->
                        <a href="?mod=customer&act=edit&code=<?= $row['CODE'] ?>" class="btn btn-success"><i class="fas fa-edit"></i></a>
                        <a href="?mod=customer&act=delete&code=<?= $row['CODE'] ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
    
    <div class="modal fade" id="modal-show" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Thông tin khách hàng</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="" alt="">
                    <p>Mã khách hàng: <span id="code_detail_customer"></span></p>
                    <p>Tên khách hàng: <span id="name_detail_customer"></span></p>
                    <img src="" alt="" id="images_customer" style="width: 50px;">
                    <p>Email: <span id="email_detail_customer"></span></p>
                    <p>Số điện thoại: <span id="mobile_detail_customer"></span></p>
                    <p>Địa chỉ: <span id="address_detail_customer"></span></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {

            $('.btn-show').on('click', function() {
                $('#modal-show').modal('show');
                var id = $(this).data('id');
            
                $.ajax({
                    type: 'get',
                    dataType: "json",
                    url: '?mod=customer&act=detail_ajax&code=' + id,
                    success: function(reponse) {

                        $('#code_detail_customer').html(reponse.CODE);
                        $('#name_detail_customer').html(reponse.NAME);
                        $('#images_customer').attr("src", "img/" + reponse.IMG + "")
                        $('#email_detail_customer').html(reponse.EMAIL);
                        $('#mobile_detail_customer').html(reponse.MOBILE);
                        $('#address_detail_customer').html(reponse.ADDRESS);
                     
                    }
                });
            });
        });

    </script>
    
</body>

</html>