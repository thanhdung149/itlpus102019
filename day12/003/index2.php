<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>các kiểu dữ liệu trong php
	</h1>
	<pre>
		mảng trong php là kiểu dữ liệu chứa nhiều giá trị
		các kiểu int, float, boolean, null chỉ chứa 1 giá trị duy nhất.
		mảng gồm nhiều phần tử.
		và mỗi phần tử được tạo thành bởi 2 yếu tố là key và value.
		key của mảng chỉ số bắt đầu từ 0 chứ không phải 1.
		các phần tử trong mảng được phân tách bởi dấu ,
	</pre>
	<?php
	$tensinhvien = ["nguyễn văn an", "nguyễn anh đức", "phan trọng huy"];
	$diemsinhvien = [5,6,7,8,9.5,10];
	$tuoisinhvien = [21,23,25];
	$gioitinh = [true, false, true];
	$honhop = ["php", "java", 15, true, 9.5];

	// chú ý là không thể nào dùng lệnh echo để in ra 1 mảng
	echo "<br> thử in ra 1 mảng bằng echo : " . $tensinhvien;

	// muốn xem cấu trúc và giá trị của 1 mảng thì ta dùng lệnh sau:
	echo "<br> mảng tên sinh viên: ";
	echo "<pre>";
	print_r($tensinhvien);
	echo "</pre>";

	echo "<br> mảng tuổi sinh viên : ";
	echo "<pre>";
	print_r($tuoisinhvien);
	echo "</pre>";

	echo "<br> mảng giới tính : ";
	echo "<pre>";
	print_r($gioitinh);
	echo "</pre>";

	echo "<br> mảng hỗn hợp : ";
	echo "<pre>";
	print_r($honhop);
	echo "</pre>";
	?>
</body>
</html>