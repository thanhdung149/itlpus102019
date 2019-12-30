
<?php
/**
 * Cú pháp kết nối đến CSDL
 * có IP là 192.168.1.1
 * có username là admin7
 * có password là 911
 * có tên cơ sở dữ liệu là : ju
 * sử dụng theo hàm mysqli_connect
 */


$servername = "localhost";
$username = "root";
$password = "";


// tao ket noi
$conn = mysqli_connect($servername,$username,$password);

// kiem tra ket noi
if ($conn){
    die("ket noi khong thanh cong: " .mysqli_connect_error());
}
echo " ket noi CSDL thanh cong"

?>