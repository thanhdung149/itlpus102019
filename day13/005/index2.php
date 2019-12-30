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
  $a = 5;

  // kiểm tra có phải mảng hay không
  var_dump(is_array($tiente));
  echo "<br>";
  var_dump(is_array($a));
  ?>
</body>
</html>