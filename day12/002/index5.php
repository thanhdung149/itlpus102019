<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>
		vòng lặp for PHP
	</h1>

	<?php

	$i = 2;
	for ($i; $i<=20; $i = $i + 2){
		echo "<br> cách 1 : " .$i;
	}
	$i = 2;
	for ($i; $i <= 20 ; $i++) { 
		# code...
		if ($i%2==0) {
			# code...
			echo "<br> cách 2: " .$i;
		}
		
	}
	?>

</body>
</html>