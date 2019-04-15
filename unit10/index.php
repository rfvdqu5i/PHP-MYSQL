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
        <td><a href="?mod=employee&act=list" class="btn btn-danger">Danh sách</a></td>
    </div>
    
</body>

</html>
 
<?php
    
    $mod = isset($_GET['mod']) ? $_GET['mod'] : '';

    $act = isset($_GET['act']) ? $_GET['act'] : '';
    
    switch ($mod) {
        
        case 'employee':

            require_once('controllers/EmployeeController.php');
            $employee_controller = new EmployeeController();
            switch ($act) {
                case 'list':
                    $employee_controller->list();
                    break;
                case 'detail':
                    $employee_controller->detail();
                    break;
                case 'process':
                    $employee_controller->process();
                    break;
                default:
                    echo "Không có action";
                    break;
            }
            break;
            
        default:
            echo "";
            break;
    }
?>


