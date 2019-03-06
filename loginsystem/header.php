<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="description" content="This is the sort of description that can show up in search results">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>loginsystem homepage</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<header>
	<nav>
		<div class="main-wrapper">
			<ul>
				<li><a href="#"><img src="img/generic-logo.jpg"></a></li>
				<li><a href="index.php">Home</a></li>
				<li><a href="index.php">About</a></li>
			</ul>
			<div class="nav-login">
				<form action="includes/login.inc.php" method="POST">
					<input type="text" name="uid" placeholder="username/e-mail">
					<input type="password" name="pwd" placeholder="password">
					<?php
						if (isset($_SESSION['useruid']))  {
							$uid = $_SESSION['useruid'];
							echo '<button type="submit" name="logout-submit">LOGOUT</BUTTON>';
						} else {
							echo '<button type="submit" name="login-submit">LOGIN</BUTTON>';
						}
					?>
				</FORM>
				<a href="signup.php">Sign Up</a>
			</div>
		</div>				
	</nav>
</header>
