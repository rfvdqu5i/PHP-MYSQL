<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bài tập 02</title>
</head>
<body>
    <?php
        $str = "";
    
        // Tạo hàm
        function kiem_tra($str) {
            if ($str == '') {
                echo "Nhập chuỗi.";
            } else {
                
                // Đảo ngược chuỗi và gán sang $str2
                $str2 = strrev($str);

                // So sánh 2 chuỗi
                if ($str == $str2) {
                    echo $str . " là chuỗi Palindrome.";
                } else echo $str . " là không phải chuỗi Palindrome.";
            }
        }
    
        if (isset($_POST['check'])) {
            
            // Lấy chuỗi trong input
            $str = isset($_POST['str']) ? trim($_POST['str']) : '';
        }
    
    ?>
    
    <!-- Form nhập chuỗi -->
    <form action="" method="post">
        <p>Đề bài: </p>
        <p>Khởi tạo 1 chuỗi sau đó kiểm tra xem chuỗi đó có phải là chuỗi Palindrome hay không?</p>
        <p>Gợi ý: Palindrome nghĩa là khi đảo ngược chuỗi vẫn không thay đổi. Ví dụ: ZenttneZ viết ngược lại vẫn giống như chữ ban đầu nhập vào.</p>
        <hr>
        <br>
        Nhập chuỗi cần kiểm tra : 
        <input type="text" name="str"> <br> <br>
        <input type="submit" name="check" value="Kiểm tra">
        <br> <br>
    </form>
    
    <?php
        // In kết quả
        kiem_tra($str);
    ?>
</body>
</html>