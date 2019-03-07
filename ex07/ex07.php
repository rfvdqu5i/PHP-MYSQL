<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bài tập 07</title>
</head>
<body>
    <p>Bảng cửu chương</p>
    
    <?php 
        for ($i = 1; $i <= 10; $i++ ) {
            for ($j = 2; $j <= 9; $j++ ) {
                $t = $i * $j;
                echo "$j x $i = $t";
                if ($t >= 10 && $i == 10) {
                    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                } else 
                if ($t >= 10) {
                    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";                
                } else {
                    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                }
            }
            echo "<br><br>";
        }
    ?>
    
</body>
</html>