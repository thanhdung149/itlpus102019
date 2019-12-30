<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>vòng lặp for PHP lệnh break</h1>
	<?php
	$i=2;
	for ($i; $i <= 20; $i=$i+2) { 
		# code...
		if ($i==10) {
			# code...
			break;
		}
		echo "<br> cách 1: " . $i;
	}
	?>
	
</body>
</html>