<?php
/**
 * Cú pháp kết nối đến CSDL
 * có IP là 192.168.1.1
 * có username là admin7
 * có password là 911
 * có tên cơ sở dữ liệu là : ju
 * cách kết nối PDO
 */
$servername = "localhost";
$username = "root";
$password = "";

try{
    $conn = new PDO("mysql:host=$servername;dbname=test1",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "ket noi den co so du lieu thanh cong";
}
catch (PDOException $e)
{
    echo "khong the ket noi den co so du lieu " .$e->getMessage();
}


?>