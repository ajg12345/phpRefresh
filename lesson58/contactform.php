<?php
if (isset($_POST['submit'])){
	$name = $_POST['name'];
	$subject = $_POST['subject'];
	$mailFrom = $_POST['mail'];
	$message = $_POST['message'];
	
	$mailTo = 'aglynn@u.northwestern.edu';	//wont send to gmail address without workaround
	$headers = "From: ".$mailFrom;
	$txt = "You have received an e-mail from ".$name.".\n\n".$message;
	
	mail($mailTo, $subject, $text, $headers);	
	header("Location: index.php?mailsent");
	
	//for this to work, you will have to change the php.ini file, or load this page in a separate webserver thats not localhost
	//so try the tips listed at this website:
	//https://www.quackit.com/php/tutorial/php_mail_configuration.cfm
	//https://newcoderslife.wordpress.com/2012/06/27/how-to-use-xampps-mail-server-mercury-mail/
	
	//and remember to back up the php.ini file
}
	

?>