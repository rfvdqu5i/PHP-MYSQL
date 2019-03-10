<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bài tập 02</title>
</head>
<body>
    <p>Vẽ vòng lặp</p>
    
    <!-- Form nhập giá trị n -->
    <form action="" method="post">
        Nhập số nguyên dương n : 
        <input type="text" name="num">
        <input type="submit" name="calculate" value="Vẽ">
    </form>
    
    <br>
    
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
                for ($i = $num - 1; $i >= 0; $i--) {
                    for ($j = 0; $j <= $num - 1; $j++) {
                        if ($j >= $i) {
                            echo "#";
                        } else {
                            echo "&nbsp;&nbsp;";
                        }
                    }
                    echo "<br>";
                }
            }
        }
    ?>

</body>
</html>