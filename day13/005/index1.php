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
    các hàm thông dụng của mảng
    count() unset() is_array() empty() implode() explode()
    ...
    serialize() unserialize()
</pre>

<?php
$tiente=["usd","aud","euro","hkd"];
echo "<pre>";
print_r($tiente);
echo "</pre>";

// unset() hủy 1 phần tử
unset($tiente[1]);

echo "<pre>";
print_r($tiente);
echo "</pre>";
?>
</body>
</html>