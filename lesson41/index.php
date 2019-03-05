<?php
	include_once 'includes/dbh.inc.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>lesson41 error handlers</title>
<link rel="stylesheet" type="text/css" href="includes/style.css">
</head>
<body>
<h2> Signup </h2>
<form action="includes/signup.inc.php" method="POST">
	<input type="text" name="first" placeholder="FirstName">
	<br>
	<input type="text" name="last" placeholder="LastName">
	<br>
	<input type="text" name="email" placeholder="Email">
	<br>
	<input type="text" name="uid" placeholder="username">
	<br>
	<input type="text" name="pwd" placeholder="password">
	<br>
	<button type="submit" name="submit"> Sign up </button>
</form>	
	

</body>




</html>
