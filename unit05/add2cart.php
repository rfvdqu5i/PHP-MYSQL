<?php
    include_once('data.php');
    session_start();
    
    $MaSP = isset($_GET['MaSP']) ? $_GET['MaSP'] : '';
    
    if (isset($_SESSION['cart'][$MaSP])) {
        $_SESSION['cart'][$MaSP]['SoLuong']++;
    } else {
        $product = $products[$MaSP];
        
        $product['SoLuong'] = 1;
        $_SESSION['cart'][$MaSP] = $product;
        
    }

    header('Location: cart.php');
?>