<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>
		các kiểu dữ liệu trong php
	</h1>
	<pre>
		- Kiểu 1: kiểu số, ví dụ là 1,5,7
			$a=7;
		- kiểu 2: kiểu số thực float
			$b=10.5;
		- kiểu 3: kiểu chuỗi, đặt trong "" hay ''
		- kiểu 4: kiểu bolean, có giá trị ( true hay false )
		- kiểu 5: kiểu mảng
		- kiểu 6: kiểu null (giá trị rỗng, không chứa gì)
		- kiểu 7: kiểu đối tượng
		nhớ var_dump() kiểm tra kiểu và giá trị

	</pre>

	<?php
	$a=7;
	echo "<br>";
	var_dump($a);

	$b=7.8;
	echo "<br>";
	var_dump($b);

	$c="php_abc";
	echo "<br>";
	var_dump($c);

	$d=null;
	echo "<br>";
	var_dump($d);
	$e=true;
	$f=false;
	echo "<br>";
	var_dump($e);
	echo "<br>";
	var_dump($f);

	// MẢNG
	$g=[1,2,4,5,7,9];
	echo "<br>";
	var_dump($g);

	// ĐỐI TƯỢNG
	/**
	 * 
	 */
	class sinhvien
	{
		
		public $ten;
		public $tuoi;
		public $diem;
	}
	$sv = new sinhvien();
    echo "<br>";
    var_dump($sv);
  
	?>
</body>
</html>