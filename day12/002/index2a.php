<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>
		cú pháp khác của if
	</h1>

	<?php
		$tuoi = 5;
		if ($tuoi > 18):
			echo "<br> đủ tuổi trưởng thành";
		else :
			echo "<br> tuổi trẻ em";
		endif;
	?>
</body>
</html>