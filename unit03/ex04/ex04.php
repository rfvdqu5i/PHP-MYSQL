<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bài tập 04</title>
</head>
<body>
    <?php
        $ho = null;
        $ten = null;
        $dem = null;
        if (isset($_POST['stand'])) {
            
            // Lấy chuỗi trong input
            $name = isset($_POST['name']) ? trim($_POST['name']) : '';
            if ($name == "") {
                $result = "Nhập tên.";
            } else {
                // Xử lý chuỗi
                $name = trim($name);
                $name = mb_strtolower($name, 'UTF-8');
                $name = ucwords($name);
                
                $arr_name = explode($name);
                $len = count($arr_name);
                $ho = $arr_name[0];
                $ten = $arr_name[$len];
            }
        } 
  
    ?>
    
    <!-- Form nhập chuỗi -->
    <form action="" method="post">
        <p>Đề bài: </p>
        <p>Viết chương trình tách họ, tên đệm và tên của một chuỗi họ tên được khởi tạo $name="...";</p>
        <pre>
        Ví dụ:
        - Chuỗi đầu vào: “Dương Vũ Văn  Quá” or “Lưu Diệc Phi”
        - Kết quả đầu ra:
               Họ:     Dương             Lưu
               Đệm:    Vũ Văn            Diệc
               Tên:    Quá               Phi
        </pre>
        <hr>
        <br>
        Nhập chuỗi cần kiểm tra : 
        <input type="text" name="name"> <br> <br>
        <input type="submit" name="stand" value="Chuẩn hóa">
        <br> <br>
    </form>
    
    <?php
        // In kết quả
        echo "<br>Họ: " .$ho;
        echo "<br>Họ: " .$ho;
        echo "<br>Tên: " .$ten;
    ?>
</body>
</html>