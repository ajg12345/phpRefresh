	
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
		header("Location: ../index.php?signup=empty&first=$first&last=$last&uid=$uid");		//by including a signup=empty we are creating a get method for signup in the index page
		exit();
	}	
	else {
		if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
			header("Location: ../index.php?signup=name_char_error");
			exit();
		}else {
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {	//there are a lot of error handlers to consider here, and these are just a few.
				header("Location: ../index.php?signup=invalid_email&first=$first&last=$last&uid=$uid");
				exit();
			} else {
				header("Location: ../index.php?signup=success");
				exit();
			}
		}	
	}
}
