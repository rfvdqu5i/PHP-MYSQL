<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bài tập 03</title>
</head>
<body>
    <?php
        $str = null;
        if (isset($_POST['stand'])) {
            
            // Lấy chuỗi trong input
            $str = isset($_POST['str']) ? trim($_POST['str']) : '';
            if ($str == "") {
                $result = "Nhập chuỗi.";
            } else {
                // Xử lý chuỗi
                $str = trim($str);
                $str = mb_strtolower($str, 'UTF-8');
                $str = ucwords($str);
                $str = $str . ".";
                $result = "Chuỗi sau khi được chuẩn hóa là: $str";
            }
        } 
  
    ?>
    
    <!-- Form nhập chuỗi -->
    <form action="" method="post">
        <p>Đề bài: </p>
        <p>Viết chương trình khởi tạo 1 chuỗi sau đó chuẩn hóa chuỗi. Cắt bỏ các khoảng trắng đầu cuối hoặc trong chuỗi, viết hoa chữ cái đầu tiên của các từ trong chuỗi. Cuối chuỗi có dấu chấm kết thúc chuỗi.</p>
        <pre>
        Ví dụ:
            - Chuỗi đầu vào: “ vŨ văN thƯoNg ”
            - Chuỗi đầu ra: “Vũ Văn Thương.”
        </pre>
        <hr>
        <br>
        Nhập chuỗi cần kiểm tra : 
        <input type="text" name="str"> <br> <br>
        <input type="submit" name="stand" value="Chuẩn hóa">
        <br> <br>
    </form>
    
    <?php
        // In kết quả
        echo $result;
    ?>
</body>
</html>