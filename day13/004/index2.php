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
    lặp mảng foreach
</pre>
<?php
$tiente = ["USD", "AUD", "EURO", "HKD"];
// cú pháp đầy đủ của foreach
foreach($tiente as $key_tiente => $val_tiente) {
    echo "<br>" . $key_tiente . " => " . $val_tiente;
}
?>
</body>
</html>