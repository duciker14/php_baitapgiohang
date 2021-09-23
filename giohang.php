<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng</title>
</head>
<body>
    <h1>GIỎ HÀNG</h1>
    <form action="" method="post">
        Tên hàng: <input type="text" name="tenhang" placeholder = "Nhập tên hàng"><br><br>
        Số lượng: <input type="text" name="soluong" placeholder = "Nhâp số lượng"><br><br>
        Đơn giá: <input type="text" name="dongia" placeholder="Nhập đơn giá"><br><br>
        <button type="submit" name="them">Thêm</button>
        <button type="submit" name="hienthi">Hiển thị giỏ hàng</button>
    </form>
    <?php
         $i = 0;
         session_start();
         if (isset($_POST['them'])) {
             if (isset($_POST['tenhang']) && isset($_POST['dongia']) && isset($_POST['soluong'])) {
                 if (!isset($_SESSION['arr'])) {
                     $arr = array(array());
                     $arr[0][0] = 1;
                     $arr[0][1] = $_POST['tenhang'];
                     $arr[0][2] = $_POST['soluong'];
                     $arr[0][3] = $_POST['dongia'];
                     $arr[0][4] = $_POST['dongia'] * $_POST['soluong'];
                     $_SESSION['arr'] = $arr; 
                 }else {
                    $arr = $_SESSION['arr'];
                    $i = count($arr);
                    $arr[$i][0] = $i+1;
                    $arr[$i][1] = $_POST['tenhang'];
                    $arr[$i][2] = $_POST['soluong'];
                    $arr[$i][3] = $_POST['dongia'];
                    $arr[$i][4] = $_POST['dongia'] * $_POST['soluong'];
                    $_SESSION['arr'] = $arr; 
                 }
             }
             echo "Tổng số loại mặt hàng đã mua là: ".count($arr);
         }
         if (isset($_POST['hienthi'])) {
            header('location:hienthigiohang.php');
        }
    ?>
</body>
</html>