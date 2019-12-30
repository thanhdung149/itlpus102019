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
        $tenBien[key];
    </pre>

    <?php
        $sinhvien=["a"=>"nguyen a","b"=>"nguyen b","c"=>"nguyen c"];

        echo "<pre>";
        print_r($sinhvien);
        echo "</pre>";

        // in ra các giá trị của các phần tử
        // thông qua chỉ số key của mảng
        echo "<br>" .$sinhvien["a"];
        echo "<br>" .$sinhvien["b"];
        echo "<br>" .$sinhvien["c"];

        //thay đổi
        $sinhvien["a"]="123445";
        $sinhvien["b"]="abc22134";
        $sinhvien["c"]="er12974";

        echo "<pre>";
        print_r($sinhvien);
        echo "</pre>";

    ?>
</body>
</html>