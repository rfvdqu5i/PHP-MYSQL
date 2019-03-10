<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bài tập 06</title>
</head>
<body>
    <p>Viết chương trình in ra tổng của n số chẵn đầu tiên.</p>
    
    <?php 
        $num = 0;
        $s = 0;
        $n = 1;
        if (isset($_POST['calculate'])) {
            
            // Lấy giá trị n
            $num = isset($_POST['num']) ? (int)trim($_POST['num']) : '';
            // Tính toán 
            if ($num < 0) {
                echo "$num không phải là số nguyên dương, mời nhập lại.";
            } else {
                do {
                    if ($n % 2 == 0) {
                        $s += $n;  
                    }
                    $n++;
                } while ($n <= $num);
            }
        }
    ?>
    
    <!-- Form nhập giá trị n -->
    <form action="" method="post"> 
        Nhập số nguyên dương n : <input type="text" name="num" style="width: 20px">
        <input type="submit" name="calculate">
    </form>
    
    <?php 
        //Hiển thị kết quả
        echo "Kết quả là : " . $s;
    ?>
</body>
</html>