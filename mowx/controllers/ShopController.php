<?php
    require_once('models/Shop.php');

    class ShopController{
        
        var $model; // Thuộc tính
        function __construct() {
            $this->model = new Shop();
        }
        
        public function list() {
            $data = $this->model->getAll();
            include_once('view/shop/index.php');
        }
        
        public function detail() {
            $code = $_GET['code'];
            $product = $this->model->find($code);
            
            include_once('view/shop/detail.php');
        }
        
        public function add2cart() {
            session_start();
            $row = array();
            $code = $_GET['code'];
            $product = $this->model->find($code);
            
            if (isset($_SESSION['cart'][$code])) {
                $_SESSION['cart'][$code]['product_quantity']++;
            } else {
                $row = $product;
                $row['product_quantity'] = 1;
                $_SESSION['cart'][$code] = $row;    
            }
            include_once('view/shop/cart.php');
        }
        
        public function delete() {
            $code = $_GET['code'];
            
            session_start();
            unset($_SESSION['cart'][$code]);
            include_once('view/shop/cart.php');
//            header('Location: view/shop/cart.php');
        }
        
        public function minus() {
            $code = $_GET['code'];
            session_start();
            if (($_SESSION['cart'][$code]['product_quantity']) > 1) {
                $_SESSION['cart'][$code]['product_quantity'] -= 1;
            }
            include_once('view/shop/cart.php');
        }
        
        public function cart() {            
            session_start();
            include_once('view/shop/cart.php');
        }
        
        public function checkout() {            
            
            include_once('view/shop/checkout.php');
        }
        
    }

?>
