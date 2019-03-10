<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bài tập 03</title>
</head>
<body>
    <?php 
        $arr = array();
        if (isset($_POST['search'])) {
            
            // Lấy chuỗi trong input
            $seq = isset($_POST['seq']) ? trim($_POST['seq']) : '';
            
            // Tách chuỗi thành mảng
            $arr = explode(',', $seq);
            
            // Đặt giá trị ban đầu của max = rỗng
            $max = $arr[0];
            
            // Tìm giá trị lớn nhất của mảng
            for ($i = 0; $i < count($arr); $i++) {
                if ($arr[$i] > $max ) {
                    $max = $arr[$i];
                }
            }
        }
    ?>
    
    <!-- Form nhập dãy số -->
    <form action="" method="post">
        <p>Đề bài: </p>
        <p>Khởi tạo mảng $arr = array(1,4,2,6,9,100,4,);</p>
        <p>Tìm phần tử lớn nhất của mảng.</p>
        <hr>
        <br>
        Nhập dãy số : 
        <input type="text" name="seq"> <br>
        <p>Mỗi số cách nhau một dấu phẩy ( , )</p>
        <p>Ví dụ : 1, 2, 3, 4</p>
        <input type="submit" name="search" value="Tìm">
    </form>
    
    <?php
        // In kết quả
        echo "<br>Phần tử lớn nhất của mảng là : " . $max;
    ?>
</body>
</html>