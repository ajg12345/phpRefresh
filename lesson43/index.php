<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>lesson43 password hashes</title>
<link rel="stylesheet" type="text/css" href="includes/style.css">
</head>

<body style="text-align:center">
<h2> this password hash uses bcrypt by default</h2>
<h1> And below is verification of how to use it hash vs hash</h1>
<?php
	/*
	echo "test123";	//plaintext
	echo "<br>";
	echo password_hash("test123",  PASSWORD_DEFAULT );	//CIPHER text 
	*/
	$INPUT = "test123";
	$hashedPwdInDb = password_hash("test123",  PASSWORD_DEFAULT );
	echo "<br>";
	echo password_verify($INPUT, $hashedPwdInDb);
?>

</BODY>