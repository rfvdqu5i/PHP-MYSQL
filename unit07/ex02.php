<?php

class product
{
    var $id;
    var $name;
    var $amounts;
    var $price;
    var $origin;
    
    function export(){
        echo 'Mã sản phẩm: ' . $this->id . '<br>'; 
        echo 'Tên sản phẩm: ' . $this->name . '<br>';
        echo 'Số lượng sản phẩm: ' . $this->amounts . '<br>';
        echo 'Đơn giá: ' . $this->price . '<br>';
        echo 'Xuất xứ: ' . $this->origin . '<br>';
    }
}

$laptop = new product();

$laptop->id = '001';
$laptop->name = 'laptop';
$laptop->amounts = '05';
$laptop->price = '14000000';
$laptop->origin = 'China';

$iphone = new product();

$iphone->id = '002';
$iphone->name = 'iphone x';
$iphone->amounts = '15';
$iphone->price = '24000000';
$iphone->origin = 'Vietnam';

$motor = new product();

$motor->id = '003';
$motor->name = 'Ducati 899 Panigale';
$motor->amounts = '05';
$motor->price = '540000000';
$motor->origin = 'Italia';

echo $laptop->export() . '<br>';
echo $iphone->export() . '<br>';
echo $motor->export() . '<br>';