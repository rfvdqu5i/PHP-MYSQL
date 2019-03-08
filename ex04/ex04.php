<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bài tập 04</title>
</head>
<body>
    <p>Vẽ vòng lặp</p>
    
    <!-- Form nhập giá trị n -->
    <form action="" method="post">
        Nhập số nguyên dương n : 
        <input type="text" name="num">
        <input type="submit" name="calculate" value="Vẽ">
    </form>
    &nbsp;
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
                for ($i = $num; $i >= 0; $i--) {
                    for ($j = $i; $j >= 0; $j--) {
                        echo "#";
                    }
                    echo "<br>";                 
                }
            }
        }
    ?>

</body>
</html>