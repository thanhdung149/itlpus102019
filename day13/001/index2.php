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
        truy cap vao phan tu mang thong qua key (chi so)
        $tenbien[key];
    </pre>
    <?php
    $sinhViens=["a"=>"nguyen a", "b"=>"nguyen b", "c"=>"nguyen c"];


    echo "<pre>";
    print_r($sinhViens);
    echo "<pre>";

    // in ra cac gia tri cua phan tu
    // thong qua chi so key cua mang

    echo "<br>" .$sinhViens["a"];
    echo "<br>" .$sinhViens["b"];
    echo "<br>" .$sinhViens["c"];
    ?>

</body>
</html>