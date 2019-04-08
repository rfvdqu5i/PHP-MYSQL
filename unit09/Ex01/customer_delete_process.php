<?php
    include_once('connection.php');
    $CODE = $_GET['CODE'];

    $query = "DELETE FROM customers WHERE CODE='".$CODE."' ";
//    echo($query);
//    die;
    $status = $conn->query($query);
    
    header('Location: customer.php');
?>