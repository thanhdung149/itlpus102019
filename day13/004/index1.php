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
    Lặp mảng
</pre>
<?php

$tiente=["usd","aud","euro","hkd"];

// đếm số phần tử trong 1 mảng
echo "<br> dem count() " .count($tiente);

//lặp mảng
for ($i=0;$i<count($tiente);$i++){
    echo "<br>" . $i . "=>" .$tiente[$i];
}
?>
</body>
</html>