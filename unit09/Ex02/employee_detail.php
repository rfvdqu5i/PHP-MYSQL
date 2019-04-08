<?php

    require_once('connection.php');
    $CODE = $_GET['CODE'];
    $query = "SELECT * FROM employees WHERE CODE='".$CODE."' ";
    $result = $conn->query($query);
    $employee = $result->fetch_assoc();
    echo json_encode($employee);

?>






