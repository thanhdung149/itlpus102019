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
        function trong PHP
        Hàm ( Function ) trong php là 1 tập hợp gồm nhiều câu lệnh
        để thực hiện 1 nhiệm vụ nào đó, mà khi cần chỉ cần gọi tên hàm
        và truyền vào các tham số cần thiết.

        cú pháp của hàm như sau:

        function tên_hàm(tên_tham_số_1, tên_tham_số_2, tên_tham_số_3,...) {
            nội dung của hàm
        }

        và khi cần gọi hàm:
        tên_hàm(X,Y,Z);
        X => tên_tham_số_1
        Y => tên_tham_số_2
        Z => tên_tham_số_3
    </pre>

    <?php
    function dt_hinhtron($bankinh) {
        // $bankinh sec là tham số của hàm
        $dientich = $bankinh*$bankinh*3.14;
        echo "<br> S của hình tròn là: " .$dientich;
    }

    // Gọi hàm: cách 1
    dt_hinhtron(6);

    // Gọi hàm: cách 2
    $r=12;
    dt_hinhtron($r);
    ?>
</body>
</html>