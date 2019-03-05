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
		<?php
		if (isset($_GET['first'])) {
			$first = $_GET['first'];
			echo '<input type="text" name="first" value="'.$first.'"><br>';
		} else {
			echo '<input type="text" name="first" placeholder="FirstName"><br>';
		}
		if (isset($_GET['last'])) {
			$last = $_GET['last'];
			echo '<input type="text" name="last" value="'.$last.'"><br>';
		} else {
			echo '<input type="text" name="last" placeholder="LastName"><br>';
		}
		?>
			<input type="text" name="email" placeholder="Email">
			<br>
		<?php
		if (isset($_GET['uid'])) {
		$uid = $_GET['uid'];
			echo '<input type="text" name="uid" value="'.$uid.'"><br>';
		} else {
			echo '<input type="text" name="uid" placeholder="username"><br>';
		}
		?>
			<input type="text" name="pwd" placeholder="password">
			<br>
			<button type="submit" name="submit"> Sign up </button>
		</form>	
		
	</p>
</div>
<?php
	/* here's one way to do it, but its slightly longer than ideal
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
		echo "<p class='success'>You have been signed up!!</p>";
		exit();
	}
	*/
	//now instead of this we could use a _GET method because the signup is POSTed to the URL
	if (!isset($_GET['signup'])) {
		exit();
	} else {
		$signupCheck = $_GET['signup'];
		if ($signupCheck=='empty') {
			echo "<p class='error'>You did not fill in all fields!</p>";
			exit();
		} elseif ($signupCheck=='name_char_error') {
			echo "<p class='error'>You used invalid characters!</p>";
			exit();
		} elseif ($signupCheck=='invalid_email') {
			echo "<p class='error'>You used an invalid e-mail!</p>";
			exit();
		} elseif ($signupCheck=='success') {
			echo "<p class='success'>You have been signed up!</p>";
			exit();
		}
	}
 
?>
</body>



</html>
