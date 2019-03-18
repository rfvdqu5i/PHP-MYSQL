<?php 
//    session_start();

    echo "Thông tin sinh viên :";
    echo "<ul>";
    echo "<li>Mã sinh viên: " .$_POST['id'] . "</li>";
    echo "<li>Họ và tên: ".$_POST['name'] . "</li>";
    echo "<li>Số điện thoại: ".$_POST['phone'] . "</li>";
    echo "<li>Email: ".$_POST['email'] . "</li>";
    if (isset($_POST['male'])) {
      echo "<li>Giới tính: ".$_POST['male'] . "</li>";
    } else if (isset($_POST['female'])) {
    	echo "<li>Giới tính: ".$_POST['female'] . "</li>";
    } else if (isset($_POST['other'])) {
    	echo "<li>Giới tính: ".$_POST['other'] . "</li>";
    }
    echo "<li>Địa chỉ: ".$_POST['address'] . "</li>";
        echo "</ul>";
    
?>
