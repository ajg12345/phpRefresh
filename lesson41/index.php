<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>lesson42 error handlers</title>
<link rel="stylesheet" type="text/css" href="includes/style.css">
</head>

<body style="text-align:center">
<h2> Signup </h2>
<div class=box>
	
	<p>
		

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
		
	</p>
</div>
<?php
	$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	if (strpos($fullUrl, "signup=empty") == true) {
		echo "<p class='error'>You did not fill in all fields!</p>";
		exit();
	} elseif(strpos($fullUrl, "signup=name_char_error") == true) {
		echo "<p class='error'>You used invalid characters!</p>";
		exit();
	} elseif(strpos($fullUrl, "signup=invalid_email") == true) {
		echo "<p class='error'>You used an invalid e-mail!</p>";
		exit();
	} elseif(strpos($fullUrl, "signup=success") == true) {		
		echo "<p class='error'>You hvae been signed up!!</p>";
		exit();
	}
 
?>
</body>



</html>
