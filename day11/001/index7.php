<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>demo</title>
</head>
<body>
	<h1>Biến trong php</h1><br>
	<h2>Toán tử . là toán tử nối chuỗi</h2>

	<?php
		$x = 12;
		$y = 3;
		$z = 5;

	echo "<br> Tổng " . ($x + $y);
	echo "<br> Hiệu " . ($x - $y);
	echo "<br> Thương " . ($x / $y);
	echo "<br> Tích " . ($x * $y);
	echo "<br> Tổng X+Y+Z = " . ($x + $y + $z);

	$ho = "Nguyễn văn";
	$ten = "An";
	echo "<br>" . $ho . " " . $ten;

	?>
</body>
</html>