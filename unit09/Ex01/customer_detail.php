<?php

    require_once('connection.php');
    $CODE = $_GET['CODE'];
    $query = "SELECT * FROM customers WHERE CODE='".$CODE."' ";
    $result = $conn->query($query);
    $customer = $result->fetch_assoc();
    echo json_encode($customer);

?>






