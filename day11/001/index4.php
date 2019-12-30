<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>demo</title>
</head>
<body>
	<h1>Ký hiệu escape tronh php</h1>
	<pre>
		- yêu cầu in ra 1 chuỗi
		"Hà Nội" là thủ đô của "Việt Nam"

		khi in ra 1 chuỗi trong php thì thông thường chuỗi đó được bao bọc bởi 1 cặp nháy kép ""

		khi mà chuỗi in ra có chuỗi nháy kép trong chuỗi
		thì php sẽ không phân biệt được đâu là nháy kép chứa chuỗi và đâu là nháy kép trong chuỗi

		=> giải pháp là sử dụng ký hiệu escape chính là dấu xuộc ngược trước ký tự muốn escape \
	</pre>

	<?php
		echo "\"Hà Nội\" là thủ đô của \"Việt Nam\"";
		// nháy kép bên ngoài là nháy kép chứa chuỗi
		// nháy kép bên trong là nháy kép thuộc chuỗi
	?>
</body>
</html>