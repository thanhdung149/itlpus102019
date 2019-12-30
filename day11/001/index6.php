<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>demo</title>
</head>
<body>
	<?php
	// khi in ra 1 chuỗi có thể sử dụng nháy kép hoặc nháy đơn.
	echo "chuỗi 1";
	echo "<br>";
	echo 'chuỗi 2';
	echo "<br>";

	// in ra số thì không cần nháy đơn hay kép.
	echo 3,14;
	echo "<br>";
	echo 100;
	echo "<br> thẻ xuống hàng";
	echo "<br>";

	// quy tắc nháy kép chứa nháy đơn và nháy đơn chứa nháy kép
	// in ra 1 chuỗi chào 'Hà Nội'
	// cách 1: sử dụng nháy kép chứa nháy đơn thì không cần escape.
	echo "'chào Hà Nội'";
	
	// cách 2 sử dụng escape \
    echo 'chào \'hà nội\' ';
    // in ra chuỗi chào "hà nội"
    // cách 1 dùng nháy đơn chứa nháy kép
    echo 'chào "hà nội"';
    // cách 2 sử dụng escape
    echo "chào \"hà nội\"";


    ?>


</body>
</html>