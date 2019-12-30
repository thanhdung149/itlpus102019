
<?php
/**
 * Cú pháp kết nối đến CSDL
 * có IP là 192.168.1.1
 * có username là admin7
 * có password là 911
 * có tên cơ sở dữ liệu là : ju
 * sử dựng cách kết nối hướng đối tượng
 */
$servername = "localhost";
$username = "root";
$password = "";

// tao su ket noi
$conn = new mysqli($servername,$username,$password);

// kiem tra ket noi
if ($conn->connect_error){
    die("ket noi khong thanh cong: " .$conn->connect_error);
}
echo "ket noi CSDL thanh cong";


?>