<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    session_start();
    if (!isset($_POST['delete'])) { 
        $arr = $_SESSION['arr'];
            echo "<h2>Giá trị đơn hàng</h2><br/>";
            echo "<table border = 1><tr><th>STT</th><th>Tên Hàng</th><th>Số lượng</th><th>Đơn giá</th><th>Thành tiền</th></tr>";
            for ($j = 0; $j < count($arr); $j++) {
            echo "<tr><td>".$arr[$j][0]."</td><td>".$arr[$j][1]."</td><td>".$arr[$j][2]."</td><td>".$arr[$j][3]."</td><td>".$arr[$j][4]."</td></tr>";
            }
            $sum = 0;
            for ($i=0; $i < count($arr); $i++) { 
                $sum += $arr[$i][4];
            }
            echo "<tr><td><b>Tổng</b></td><td></td><td></td><td></td><td>$sum</td></tr>";
            echo '</table>';
    }else {
        echo "Giỏ hàng rỗng!";
        session_destroy();
        unset($_SESSION['arr']);
    }   
?>
    <a href ="giohang.php"><button>Trở lại</button></a><br><br>
    <form action="" method="post">
    <button type="submit" name="delete" value="">Xoá giỏ hàng</button>
    </form>
</body>
</html>