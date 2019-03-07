<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bài tập 09</title>
</head>
<body>
    <p>Viết chương trình giải phương trình bậc nhất ax + b = 0 </p>
    
    <?php 
        $result = 0;
        if (isset($_POST['calculate'])) {
            
            // Lấy giá trị n
            $a = isset($_POST['a']) ? (int)trim($_POST['a']) : '';
            $b = isset($_POST['b']) ? (int)trim($_POST['b']) : '';
            
            // Tính toán 
            if ($a == ''){
                $result = 'Bạn chưa nhập số a';
            }
            else if ($b == ''){
                $result = 'Bạn chưa nhập số b';
            }
            else if ($a == 0){
                $result = 'Số a phải nhập khác 0';
            }
            else {
                $result = -($b) / $a;
            }
        }
    ?>
    
    <!-- Form nhập giá trị n -->
    <form action="" method="post"> 
        <input type="text" name="a" style="width: 20px"> x + <input type="text" name="b" style="width: 20px"> = 0
        <br> <br>
        <input type="submit" name="calculate" value="Tính">
        <br> <br>
    </form>
    
    <?php 
        //Hiển thị kết quả
        echo "Kết quả là : " . $result;
    ?>
</body>
</html>