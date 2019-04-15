<?php
    require_once('models/Employee.php');

    class EmployeeController{
        
        public function list() {
            $e_model = new Employee();
            $data = $e_model->getAll();
            include_once('view/list.php');
        }
        
        public function detail() {
            $e_model = new Employee();
            $code = $_GET['code'];
            $employee = $e_model->find($code);
            
            include_once('view/detail.php');
        }
        
        public function add() {
            echo "Xem danh sách - nhân viên trong controller";
        }
        public function process() {
            echo "Xem danh sách - nhân viên trong controller";
        }
    }

?>