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


echo $_SESSION['username']."<br>";
if (!isset($_SESSION['username'])) {
	echo "you are not logged in!";
}else {
	echo "You are logged in!";
}


?>

						


</body>




</html>