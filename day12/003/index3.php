<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>mảng kết hợp</h1>
	<pre>
		trong php có 3 kiểu mảng:
		- kiểu 1: mảng chỉ số (mảng có key là các số thì được gọi là mảng chỉ số)
		- kiểu 2: là mảng kết hợp (mảng có ít nhất 1 key là 1 chuỗi)
		- kiểu 3: là mảng đa chiều (mảng lồng mảng)
		có nghĩa mỗi phần tử của mảng lại là 1 mảng.
	</pre>

	<?php
		// mảng chỉ số
		$mangchiso = ["tuan anh", "anh đức", "trọng huy"];

		echo "<br> mảng chỉ số : ";
		echo "<pre>";
		print_r($mangchiso);
		echo "</pre>";

		 // mảng kết hợp
	    $mangkethop = ["ta" => "tuấn anh", "th" => "thúy hằng", "cv" => "công vinh"];
	    echo "<br> mảng kết hợp";
	    echo "<pre>";
	    print_r($mangkethop);
	    echo "</pre>";
	    
		?>
</body>
</html>