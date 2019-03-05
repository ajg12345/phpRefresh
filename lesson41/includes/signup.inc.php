	
<?php
	
if (isset($_POST['submit'])){
	include_once 'dbh.inc.php';	//doesn't exist for this example because checking errors
	
	$first = $_POST['first'];
	$last = $_POST['last'];
	$email = $_POST['email'];
	$uid = $_POST['uid'];
	$pwd = $_POST['pwd'];
	//in general, always check for errors first!, if there is an error, but code checks correct, you may process a success code with erroneous inputs.
	if (empty($first) || empty($last) || empty($email)|| empty($uid)|| empty($pwd)) {
		header("Location: ../index.php?signup=empty");	
	}	
	else {
		if (filter_var($email, !FILTER_VALIDATE_EMAIL)) {	//there are a lot of error handlers to consider here, and these are just a few.
			header("Location: ../index.php?signup=invalid_email");
		} else {
			echo "sign up the user!";
		}
			
	}
}
?>