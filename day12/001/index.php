<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Các hàm xử lý chuỗi trong php</h1>
	<pre>
		nhớ hàm: var_dump(biến);
		hàm in ra kiểu dữ liệu của biến và giá trị của biến.
		hàm này sử dụng để debug gỡ lỗi.
	</pre>

	<?php
		$demo = "Ha Noi là thu do cua Viet Nam";
		//đếm số ký tự trong chuỗi.
		echo "<br> strlen() :" . str_word_count($demo);
		//strpos

		/**
		- strpos(tham số 1, tham số 2)
		- tham số 1 là chuỗi mẹ.
		- tham số 2 là chuỗi con cần tìm trong chuỗi mẹ.
		- nếu tùm thấy trả về vị trí xuất hiện của chuỗi con trong chuỗi mẹ.
		- nếu không tìm thấy thì trả về false
		*/
		echo "<br> strpos() : " . strpos($demo, "viet nam");
		$hanquoc = strpos($demo, "han quoc");
		echo "<br>";
		echo "<br> strpos() : " . var_dump($hanquoc);
		/**
	     * str_replace(tham số 1 , tham số 2 , tham số 3)
	     * tham số 1 : chuỗi cần thay thế
	     * tham số 2 : chuỗi thay thế
	     * tham số 3 : chuỗi mẹ
	     */
    	echo "<br> str_replace() " . str_replace("Ha noi", "thanh pho ha noi", $demo);


	?>
</body>
</html>