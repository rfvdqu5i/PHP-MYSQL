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
    <title>Zent Group</title>
    <!-- Latest compiled and minified CSS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>



</head>

<body>
    <div class="container">

        <h2 align="center">DANH SÁCH NHÂN VIÊN</h2>
        <br>
        <a href="employee_add.php" class="btn btn-warning">Thêm mới</a>

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
                    foreach ($data as $row) {
                ?>
                <tr>
                    <td><?= $row['CODE'] ?></td>
                    <td><?= $row['NAME'] ?></td>
                    <td><img src="img/employees/<?= $row['IMG'] ?>" alt="" width="50px"></td>
                    <td><?= $row['EMAIL'] ?></td>
                    <td><?= $row['MOBILE'] ?></td>
                    <td><?= $row['ADDRESS'] ?></td>
                    <td>
                        <a href="javasript:;" class="btn btn-primary btn-show" data-id="<?= $row['CODE'] ?>" data-toggle="modal" data-target="#exampleModalCenter">Show</a>
                        <a href="employee_edit.php?CODE=<?= $row['CODE'] ?>" class="btn btn-warning">Update</a>
                        <a href="employee_delete_process.php?CODE=<?= $row['CODE'] ?>" class="btn btn-danger">Delete</a>

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
                    <h5 class="modal-title" id="exampleModalLongTitle">Thông tin nhân viên</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="" alt="">
                    <p>Mã nhân viên: <span id="code_detail_employee"></span></p>
                    <p>Tên tên nhân viên: <span id="name_detail_employee"></span></p>
                    <img src="" alt="" id="images_employee" style="width: 50px;">
                    <p>Email: <span id="email_detail_employee"></span></p>
                    <p>Số điện thoại: <span id="mobile_detail_employee"></span></p>
                    <p>Địa chỉ: <span id="address_detail_employee"></span></p>
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
                    url: 'employee_detail.php?CODE=' + id,
                    success: function(reponse) {

                        $('#code_detail_employee').html(reponse.CODE);
                        $('#name_detail_employee').html(reponse.NAME);
                        $('#images_employee').attr("src", "img/employees/" + reponse.IMG + "")
                        $('#email_detail_employee').html(reponse.EMAIL);
                        $('#mobile_detail_employee').html(reponse.MOBILE);
                        $('#address_detail_employee').html(reponse.ADDRESS);
                     console.log(reponse.CODE);
                    }
                });
            });
        });

    </script>
</body>

</html>
