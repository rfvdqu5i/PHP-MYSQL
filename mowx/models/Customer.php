<?php
    require_once('models/Model.php');
    class Customer extends Model {
        var $table = 'customers';
        var $primary_key = 'customer_code';   
    }
?>