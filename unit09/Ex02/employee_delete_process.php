<?php
    include_once('connection.php');
    $CODE = $_GET['CODE'];

    $query = "DELETE FROM employees WHERE CODE='".$CODE."' ";
//    echo($query);
//    die;
    $status = $conn->query($query);
    
    header('Location: employee.php');
?>