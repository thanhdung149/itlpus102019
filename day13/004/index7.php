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
<?php
$ngoaite = [];
$ngoaite["aud"] = ["name" => "aust dollar", "mua" => 12343, "ban" => 34532];
$ngoaite["usd"] = ["name" => "usd dollar", "mua" => 16330, "ban" => 23434];
$ngoaite["cad"] = ["name" => "canadian dollar", "mua" => 1231, "ban" => 3232];

echo "<pre>";
print_r($ngoaite);
echo "</pre>"
?>
tạo ra 1 bảng html có 4 cột và 4 dòng<br>
các cột Mã | tên | mua vào | bán ra<br><br>

<table style="width: 100%">
    <thread>
        <tr>
            <td>Mã</td>
            <td>Tên</td>
            <td>Mua</td>
            <td>Bán</td>
        </tr>
    </thread>

    <tbody>
        <?php
        foreach ($ngoaite as $key_ngoaite => $val_ngoaite) {
            echo "<tr>";
                echo "<td>" . $key_ngoaite . "</td>";
                echo "<td>" . $val_ngoaite["name"] . "</td>";
                echo "<td>" . $val_ngoaite["mua"] . "</td>";
                echo "<td>" . $val_ngoaite["ban"] . "</td>";
            echo "</tr>";
            }
        ?>
    </tbody>
</table>
</body>
</html>