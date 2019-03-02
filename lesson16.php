<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>the weekday example</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<p>
<?php
	$dayofweek = date("w");
	
	switch ($dayofweek) {
		case 1:
		echo "It is Monday";
		break;
		case 2:
		echo "It is Tuesday";
		break;
		case 3:
		echo "It is Wednesday";
		break;
		case 4:
		echo "It is Thursday";
		break;
		case 5:
		echo "It is Friday";
		break;
		case 6:
		echo "It is Saturday";
		break;
		case 0:
		echo "It is Sunday";
		break;
	}

?>
</p>

</body>

</html>