
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shopcart";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
echo "<br>Kết nối thành công<br>";

// create database

$sql = "CREATE DATABASE shopcart";
if ($conn->query($sql)===true){
    echo "tao co so du lieu thanh cong";
}
else{
    echo "loi tao co so du lieu" . $conn->connect_error;
}

// create table

?>