<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "customer";

    // Khởi tạo kết nối tới cơ sở dữ liệu
    $conn = new mysqli($servername,$username,$password,$dbname);
    
    // Thiết lập bảng mã utf-8
    $conn->set_charset("utf8");

    // Kiểm tra kết nối
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
?>