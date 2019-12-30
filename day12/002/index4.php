<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <h1>Câu lệnh switch case</h1>
    <pre>
    	switch ($bien) {
    		case gia tri 1:
    			code to be executed if n=label1;
    			break;
    		case gia tri 2:
    			code to be executed if n=label2;
    			break;
    		case gia tri 3:
    			code to be executed if n=label3;
    			break;
    		...
    		default:
    			code to be executed if n is different from all labels;
    	}
    </pre>

	<?php

		echo "<br> thoi khoa bieu";
		$ngay=6;
		switch($ngay){
			case 2:
			echo "<br> 2 sang : toan";
			echo "<br> 2 chieu : ly";
			echo "<br> 2 toi : van";
			break;
			case 3:
			echo "<br> 3 sang : hoa";
			echo "<br> 3 chieu : sinh";
			echo "<br> 3 toi : dia";
			break;
			case 4:
			echo "<br> 4 sang : su";
			echo "<br> 4 chieu : anh";
			echo "<br> 4 toi : GDCD";
			break;
			case 5:
			echo "<br> 5 sang : ky thuat";
			echo "<br> 5 chieu : the duc";
			echo "<br> 5 toi : dia";
			break;
			case 6:
			echo "<br> 6 sang : ky thuat";
			echo "<br> 6 chieu : the duc";
			echo "<br> 6 toi : dia";
			break;
			case 7:
			echo "<br> 7 sang : ky thuat";
			echo "<br> 7 chieu : the duc";
			echo "<br> 7 toi : dia";
			break;
			default:
			echo "<br>  sang : nghi";
			echo "<br> 4chieu : nghi";
			echo "<br>  toi : nghi";
			break;
			
		}
	?>

</body>
</html>