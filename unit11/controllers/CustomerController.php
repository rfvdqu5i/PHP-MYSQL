<?php
    require_once('models/Customer.php');

    class CustomerController{
        
        public function list() {
            $p_model = new Customer();
            $data = $p_model->getAll();
            include_once('view/list.php');
        }
        
        public function detail() {
            $p_model = new Customer();
            $code = $_GET['code'];
            $customer = $p_model->find($code);
            
            include_once('view/detail.php');
        }
        
        public function add() {
            include_once('view/add.php');
        }
        
        public function insert() {
            $data = $_POST;
            
            $p_model = new Customer();
            
            $status = $p_model->insert($data);
            
            if($status == true){
                 setcookie('add_success','1',time() + 2); 
                 header('Location: ?mod=customer&act=list');
            }else{
                 setcookie('add_failed','Thêm mới không thành công',time()+2);
                 header('Location: ?mod=customer&act=add');
            }
        }
        
        public function edit() {
            
            $p_model = new Customer();
            
            $code = $_GET['code'];
            
            $customer = $p_model->find($code);
            include_once('view/edit.php');
        }
        
        public function detail_ajax() {
            
            $p_model = new Customer();
            
            $code = $_GET['code'];
            
            $customer = $p_model->find($code);

            echo json_encode($customer);
        }
        
        public function update() {
            $data = $_POST;
            
            $p_model = new Customer();
            
            $status = $p_model->update($data);
            if($status == true){
                setcookie('edit_success','1',time()+5); 
                header('Location: ?mod=customer&act=list');
            }else{
                setcookie('edit_failed','1',time()+5);
                header('Location: ?mod=customer&act=edit&code='.$data['CODE']);
            }
        }
        
        public function delete() {
        
            $p_model = new Customer();
            
            $code = $_GET['code'];
            
            $customer = $p_model->delete($code);
            
            setcookie('delete_success','1',time() + 2); 
            header('Location: ?mod=customer&act=list');
        }
    }

?>