<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bài tập 04</title>
</head>
<body>
    <?php
        $arr_name = array();
        $ho = null;
        $ten = null;
        $dem = null;
        if (isset($_POST['stand'])) {
            
            // Lấy chuỗi trong input
            $name = isset($_POST['name']) ? trim($_POST['name']) : '';
            // Xử lý chuỗi
            $name = trim($name);
            $name = mb_strtolower($name, 'UTF-8');
            $name = ucwords($name);
                
            $arr_name = explode(' ',$name);
            $len = count($arr_name);
            $ho = $arr_name[0];
            $ten = $arr_name[$len-1];
                
            for ($i=1; $i < ($len - 1); $i++) {
                $dem = $dem.$arr_name[$i]." ";
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
        Nhập họ tên : 
        <input type="text" name="name" style="width:500px"> <br> <br>
        <input type="submit" name="stand" value="Tách">
        <br> <br>
    </form>
    
    <?php
        // In kết quả
        if ($ho != "") {
            echo "<br>Họ: " .$ho;
            echo "<br>Đệm: " .$dem;
            echo "<br>Tên: " .$ten;
        } else echo "<br>Nhập họ tên."
    ?>
</body>
</html>