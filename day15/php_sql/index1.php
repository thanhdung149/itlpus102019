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
        IP máy của bạn : localhost ( trên máy chủ thật : 192.168.2.1)
        Post máy của bạn : 3306
        Username mysql : root
        Password : (rỗng không có gì)
    </pre>

    <?php
    // IP may chu PHP
    $servername = "localhost";
    // username mysql
    $username = "root";
    // password
    $password = "";
    // ten co so du lieu ( Name Database )
    $dbname = "store";

    // cu phap ket noi den csdl mysql tu php bang cach PDO
    try {
        $conn = new PDO("mysql:host=$servername;dbname=store", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
    }
    catch(PDOException $e)
    {
        echo "Connection failed: " . $e->getMessage();
        die();
    }

    ?>
</body>
</html>