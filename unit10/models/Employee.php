<?php
    
    class Employee {
        public function getAll() {
            require_once('models/Connection.php');

            $query = "SELECT * FROM employees";

            $result = $conn->query($query);


            $data = array();
            while($row = $result->fetch_assoc()) { 
                $data[] = $row;
            }

            return $data;
        }
        
        public function find($code) {
            require_once('models/Connection.php');

            $query = "SELECT * FROM employees WHERE code = '".$code."' ";

            $result = $conn->query($query);

            $employee = $result->fetch_assoc();

            return $employee;
        }
    }
    

?>