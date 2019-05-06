    <?php
        if(isset($_COOKIE['add_success'])) {
    ?>
    <script type="text/javascript">
        toastr["success"]("Thêm mới thành công", "Thông báo: ");

    </script>
    <?php 
            } else if(isset($_COOKIE['delete_success'])) {
        ?>
    <script type="text/javascript">
        toastr["success"]("Xóa thành công", "Thông báo: ");

    </script>
    <?php 
            } else if(isset($_COOKIE['edit_success'])) {
        ?>
    <script type="text/javascript">
        toastr["success"]("Sửa thành công", "Thông báo: ");

    </script>
    <?php
        } 
    ?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Danh sách nhân viên</title>
        <link href="../public/css/bootstrap.min.css" rel="stylesheet">
        <link href="../public/css/font-awesome.min.css" rel="stylesheet">
        <link href="../public/css/datepicker3.css" rel="stylesheet">
        <link href="../public/css/styles.css" rel="stylesheet">

        <!--Custom Font-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    </head>

    <body>

        <?php include_once('view/header.php'); ?>

        <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
            <h2 align="left">DANH SÁCH NHÂN VIÊN</h2>
            <hr>
            <a href="?mod=employee&act=add" class="btn btn-primary">Thêm mới</a>
            <hr>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Tên nhân viên</th>
                        <th>Sinh nhật</th>
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
                        <td><?= $row['employee_code'] ?></td>
                        <td><?= $row['employee_name'] ?></td>
                        <td><?= $row['employee_birthday'] ?></td>
                        <td><?= $row['employee_email'] ?></td>
                        <td><?= $row['employee_mobile'] ?></td>
                        <td><?= $row['employee_address'] ?></td>
                        <td>
                            <a href="javasript:;" class="btn btn-primary btn-show" data-id="<?= $row['employee_code'] ?>" data-toggle="modal" data-target="#exampleModalCenter"><i class="fas fa-eye"></i></a>
                            <!--<a href="?mod=customer&act=detail&code=<?= $row['employee_code'] ?>" class="btn btn-primary"><i class="fas fa-eye"></i></a>-->
                            <a href="?mod=employee&act=edit&code=<?= $row['employee_code'] ?>" class="btn btn-success"><i class="fas fa-edit"></i></a>
                            <a href="?mod=employee&act=delete&code=<?= $row['employee_code'] ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                            <a href="?mod=employee&act=delete&code=<?= $row['employee_code'] ?>" class="btn btn-success btn-delete"><i class="fas fa-trash"></i></a>
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

                $('.btn-delete').click(function(e) {
                    e.preventDefault();
                    var url = $(this).attr('href');
                    console.log(url);
                    swal({
                            tittle: "Bạn có muốn xóa không.?",
                            text: "Sau khi xóa sẽ không thể khôi phục lại.!",
                            icon: "warning",
                            buttons: true,
                            dangerMode: true,
                        })
                        .then((willDelete) => {
                            if (willDelete) {
                                window.location.href = url;
                                swal("Poof! Your imaginary file has been deleted!", {
                                    icon: "success",
                                });
                            } else {
                                swal("Your imaginary file is safe!");
                            }
                        })
                });
            });

        </script>
    </body>

    </html>
