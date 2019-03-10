<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Bài tập 08</title>
</head>

<body>
    <p>Viết chương trình giải phương trình bậc nhất ax^2 + bx + c = 0</p>

    <?php 
            $result = '';
            if (isset($_POST['calculate']))
            {
                // Lấy giá trị từng biến
                $a = isset($_POST['a']) ? $_POST['a'] : '';
                $b = isset($_POST['b']) ? $_POST['b'] : '';
                $c = isset($_POST['c']) ? $_POST['c'] : '';

                // Tính toán
                $delta = ($b*$b) - (4*$a*$c);

                if ($delta < 0){
                    $result = 'Phương trình vô nghiệp';
                }
                else if ($delta == 0){
                    $result = 'Phương trình nghiệp kép x1 = x2 = ' . (-$b/2*$a);
                }
                else {
                    $result = 'Phương trình có hai nghiệp phân biệt, x1 = ' . ((-$b + sqrt($delta))/2*$a);
                    $result .= ',x2 = ' . ((-$b - sqrt($delta))/2*$a);
                }
            }
        ?>
    
    <form method="post" action="">
        <input type="text" style="width: 20px" name="a" value="" /> x<sup>2</sup>
        +
        <input type="text" style="width: 20px" name="b" value="" /> x
        +
        <input type="text" style="width: 20px" name="c" value="" />
        = 0
        <br /><br />
        <input type="submit" name="calculate" value="Tính" />
    </form>
    <?php echo $result; ?>
</body>

</html>
