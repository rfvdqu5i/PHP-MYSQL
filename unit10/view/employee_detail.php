<?php

    require_once('Models/Connection.php');
    $code = $_GET['code'];
    $query = "SELECT * FROM employees WHERE code='".$code."' ";
    $result = $conn->query($query);
    $employee = $result->fetch_assoc();
    echo json_encode($employee);

?>
