<!DOCTYPE html>
<?php
session_start();
?>
<html>
<head>
<meta charset="UTF-8">
<title>NAV and included Docs</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<ul>
		<li> <a href="index.php">HOME</a></li>
		<li> <a href="contact.php">CONTACT</a></li>
	</ul>
<?php

$_SESSION['username'] = "dani948a";
echo $_SESSION['username'];

?>

						


</body>




</html>