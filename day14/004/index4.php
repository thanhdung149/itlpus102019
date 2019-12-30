<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<pre>
    lệnh return trong function
    lệnh return nó sẽ trả về 1 biến và kết thúc hàm tạo thời điểm đó
    nếu có câu lệnh viết sau return cũng không chạy
    bởi vì lệnh return là lệnh cuối cùng trong hàm được chạy
</pre>

<?php
function dt_hinhtron($bankinh) {
    // $bankinh sẽ là tham số của hàm
    $dientich = $bankinh*$bankinh*3.14;
    return $dientich;
}


/**
 * sẽ gặp lỗi nếu không truyền tham số khi gọi hàm
Fatal error: Uncaught ArgumentCountError: Too few arguments to function dt_hinhtron(), 0 passed in C:\xampp\htdocs\itplus102019\day14\004\index4.php on line 33 and exactly 1 expected in C:\xampp\htdocs\itplus102019\day14\004\index4.php:19 Stack trace: #0 C:\xampp\htdocs\itplus102019\day14\004\index4.php(33): dt_hinhtron() #1 {main} thrown in C:\xampp\htdocs\itplus102019\day14\004\index4.php on line 19
 */

// Gọi hàm
$r=12;
$ketqua2 = dt_hinhtron();
echo "<br> S của hinh tròn là kq2: " . $ketqua2;
?>
</body>
</html>