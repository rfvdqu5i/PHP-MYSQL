<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bài tập 01</title>
</head>
<body>
    <p>Viết chương trình tính tổng S = 1 /1! + 2 /2! + ....+ n / n! ?</p>
    
    <?php 
        $num = 0;
        if (isset($_POST['calculate'])) {
            
            // Lấy giá trị n
            $num = isset($_POST['num']) ? (int)trim($_POST['num']) : '';
            
            //Kiểm tra số nguyên dương
            if ($num < 0) {
                echo "$num không phải là số nguyên dương, mời nhập lại.";
                $s = 0;
            } else {
                //Tính toán
                $s = 0;
                function giai_thua($n) {
                    $gt = 1;
                    for ($i = 1; $i <= $n; $i++) {
                        $gt = $gt * $i;
                    }
                    return $n = $gt;
                }
                for ($i = 1; $i <= $num; $i++) {
                    $s += (float)($i / giai_thua($i));
                }
            }
        }
    ?>
    
    <!-- Form nhập giá trị n -->
    <form action="" method="post">
        Nhập số nguyên dương n : 
        <input type="text" name="num">
        <input type="submit" name="calculate" value="Tính">
    </form>
    
    <?php 
        //Hiển thị kết quả
        echo "Kết quả là : " . $s;
    ?>
</body>
</html>