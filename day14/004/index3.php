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
//}
//
//// Gọi hàm
$ketqua1 = dt_hinhtron(6);
echo "<br> S của hinh tròn là kq1: " . $ketqua1;

// Gọi hàm
$r=12;
$ketqua2 = dt_hinhtron($r);
echo "<br> S của hinh tròn là kq2: " . $ketqua2;
?>
</body>
</html>