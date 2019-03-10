<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bài tập 01</title>
</head>
<body>
    <?php 
        $arr = array();
        if (isset($_POST['sort'])) {
            
            // Lấy chuỗi trong input
            $seq = isset($_POST['seq']) ? trim($_POST['seq']) : '';
            
            // Tách chuỗi thành mảng
            $arr = explode(',', $seq);
            
            // Sắp xếp tăng dần
            sort($arr);
        }
    ?>
    
    <!-- Form nhập dãy số -->
    <form action="" method="post">
        <p>Đề bài: </p>
        <p>Khởi tạo mảng $arr = array(1,4,2,6,9,100,4,);</p>
        <p>Sắp xếp và in ra mảng theo thứ tự tăng dần.</p>
        <hr>
        <br>
        Nhập dãy số : 
        <input type="text" name="seq"> <br>
        <p>Mỗi số cách nhau một dấu phẩy ( , )</p>
        <p>Ví dụ : 1, 2, 3, 4</p>
        <input type="submit" name="sort" value="Sắp xếp">
    </form>
    
    <?php
        // In dãy số sau khi sắp xếp
        echo "<br>Mảng sau khi đã sắp xếp tăng dần là : ";
        for($i = 0 ; $i < count($arr) ; $i++){
            echo  "" . $arr[$i] . ", ";
        }
    ?>
</body>
</html>