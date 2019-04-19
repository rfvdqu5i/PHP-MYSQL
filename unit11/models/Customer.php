<?php
    
    class Customer{
        public function getAll() {
            require_once('models/Connection.php');

            $query = "SELECT * FROM customers";

            $result = $conn->query($query);


            $data = array();
            while($row = $result->fetch_assoc()) { 
                $data[] = $row;
            }

            return $data;
        }
        
        public function find($code) {
            require_once('models/Connection.php');

            $query = "SELECT * FROM customers WHERE code = '".$code."' ";

            $result = $conn->query($query);

            $customer = $result->fetch_assoc();

            return $customer;
        }
        
        public function insert($data) {
            require_once('models/Connection.php');
            $data = $_POST;

            $query = "INSERT INTO customers (CODE,NAME,EMAIL,MOBILE,ADDRESS)
                VALUES ('".$data['CODE']."','".$data['NAME']."','".$data['EMAIL']."','".$data['MOBILE']."','".$data['ADDRESS']."')";

            $result = $conn->query($query);
            
            return $result;
        }
        
/*        public function detail_ajax($code) {
            require_once('models/Connection.php');
            
            $CODE = $_GET['code'];

            $query = "SELECT * FROM customers WHERE CODE='".$CODE."' ";

            $result = $conn->query($query);

            $customer = $result->fetch_assoc();

            return $customer;
        }*/
        
        public function update($data) {
            require_once('models/Connection.php');
            $data = $_POST;

            $query = "UPDATE customers SET NAME='".$data['NAME']."', EMAIL='".$data['EMAIL']."', MOBILE='".$data['MOBILE']."', ADDRESS='".$data['ADDRESS']."' WHERE CODE='".$data['CODE']."' ";

            $result = $conn->query($query);

            return $result;
        }
        
        public function delete($code) {
            require_once('models/Connection.php');

            $query = "DELETE FROM customers WHERE code='".$code."' ";

            $result = $conn->query($query);

            return $result;
        }
        
    }
    

?>