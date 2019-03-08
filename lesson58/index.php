
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Contact form tutorial</title>
		<link HREF="HTTPS://FONTS.GOOGLEAPIS.COM/CSS?FAMILY=Roboto+Condensed:400,700" rel="stylesheet" >
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
	<main>
		<p>SEND E-MAIL</p>
		<form class="contact-form" action='contactform.php' method='POST'>
			<input type="text" name="name" placeholder="Full Name" >
			<input type="text" name="mail" placeholder="Your Email" >
			<input type="text" name="subject" placeholder="Subject" >
			<textarea name="message" placeholder="Message"></textarea>
			<BUTTON TYPE='submit' NAME='SUBMIT'>SEND MAIL</button>
		</form>
	</main>	
	</body>
</html>
