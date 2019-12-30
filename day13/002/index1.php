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
    thay đổi các giá trị của các phần tủ trong mảng chỉ số
</pre>

<?php

$sinhviens=["nguyen van a","nguyen van b","nguyen van c"];

echo "<pre>";
print_r($sinhviens);
echo "<br>";


// in ra các giá trị của các phần tử
// thông qua chỉ số key của mảng
echo "<br>" .$sinhviens[0];
echo "<br>" .$sinhviens[1];
echo "<br>".$sinhviens[2];

echo "<br>";
// thay đổi các giá trị trong mảng
$sinhviens[0]="hoàng văn a";
$sinhviens[1]="phạm tiến đức";
$sinhviens[2]="nguyễn văn trung";

echo "<br> in ra cấu trúc mảng sau khi thay đổi";
echo "<pre>";
print_r($sinhviens);
echo "</pre>";
?>
</body>
</html>