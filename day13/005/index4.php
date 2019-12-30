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
        cách hàm thông dụng của mảng
        count() unset() is_array() empty() implode() explode()
        ...
        serialize() unserialize()
    </pre>
    <?php
    $tiente=["usd","aud","cad","euro"];
    $a=5;

    // implode chuyển mảng thành 1 chuỗi
    echo "<br>" . implode(",", $tiente);
    echo "<br>" . implode("-", $tiente);
    echo "<br>" . implode("+", $tiente);

    //explode chuyển 1 chuỗi thành 1 mảng
    $demo="hà nội - bắc ninh - bắc giang";
    $demo1=explode("-", $demo);
    echo "<pre>";
    print_r($demo1);
    echo "</pre>";

     // lưu trữ 1 mảng trong cơ sở dữ liệu
    $tiente1 = serialize($tiente);
    var_dump($tiente1);

      // giải lưu trữ serialize dùng unserialize()
   $tiente2 = unserialize($tiente1);
    echo "<pre>";
    print_r($tiente2);
    echo "</pre>";
    ?>,
</body>
</html>