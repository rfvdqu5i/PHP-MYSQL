<?php
    
    $mod = isset($_GET['mod']) ? $_GET['mod'] : '';

    $act = isset($_GET['act']) ? $_GET['act'] : '';
    
    switch ($mod) {
        case 'customer':
            require_once('controllers/CustomerController.php');
            $customer_controller = new CustomerController();
            switch ($act) {
                case 'list':
                    $customer_controller->list();
                    break;
                case 'detail':
                    $customer_controller->detail();
                    break;
                case 'detail_ajax':
                    $customer_controller->detail_ajax();
                    break;
                case 'add':
                    $customer_controller->add();
                    break;  
                case 'insert':
                    $customer_controller->insert();
                    break;
                case 'edit':
                    $customer_controller->edit();
                    break;
                case 'update':
                    $customer_controller->update();
                    break;
                case 'delete':
                    $customer_controller->delete();
                    break;
                default:
                    echo "Không có action";
                    break;
            }
            break;
            
        default:
            header('Location: ?mod=customer&act=list');
            break;
    }
?>