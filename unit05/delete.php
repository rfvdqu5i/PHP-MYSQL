<?php
    session_start();
    include_once('data.php');
    $MaSP = isset($_GET['MaSP']) ? $_GET['MaSP'] : '';

    if (($_SESSION['cart'][$MaSP]['SoLuong']) > 1) {
        $_SESSION['cart'][$MaSP]['SoLuong'] -= 1;
    } else {
        unset($_SESSION['cart'][$MaSP]);
    }

    header('Location: cart.php');
?>