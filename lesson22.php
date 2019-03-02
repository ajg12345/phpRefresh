<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>create your own function</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<p>
<?php


	function newCalc($x) {
		$newnr = $x * 0.75;
		echo "Here is 75% of what you wrote: ".$newnr."<br>";
	}

newCalc(100);


?>
</p>

</body>

</html>