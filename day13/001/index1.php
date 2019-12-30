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
    truy cập vào phần tử của mảng thông qua key (chỉ số)
    $tenBien[hey]
</pre>

<?php
$sinhViens=["nguyen A", "nguyen B", "nguyen C"];
echo"<pre>";
print_r($sinhViens);
echo "<pre>";

// in duoc ra cac gia tri cua cac phan tu
// thong qua chi so key cua mang
echo "<br>" .$sinhViens[0];
echo "<br>" .$sinhViens[1];
echo "<br>" .$sinhViens[2];
?>
</body>
</html>