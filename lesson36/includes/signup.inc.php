	
<?php
	include_once 'dbh.inc.php';
/* the problem with this commented out code is that it is vulnerable to SQL inj attax

	$first = $_POST['first'];
	$last = $_POST['last'];
	$email = $_POST['email'];
	$uid = $_POST['uid'];
	$pwd = $_POST['pwd'];
	$sql = "insert into users (user_first, user_last, user_email, user_uid, user_pwd)
values('".$first."', '".$last."', '".$email."', '".$uid."', '".$pwd."');";
	$result = mysqli_query($conn, $sql);
*/

//the code below doesn't take the post command directly which is good, escaping strings carefully
/*
	$first = mysqli_real_escape_string($conn, $_POST['first']);
	$last = mysqli_real_escape_string($conn, $_POST['last']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
	
	$sql = "insert into users (user_first, user_last, user_email, user_uid, user_pwd)
values('".$first."', '".$last."', '".$email."', '".$uid."', '".$pwd."');";
	$result = mysqli_query($conn, $sql);
*/
//here we use prepared statements (the current preferred method)
	$first = mysqli_real_escape_string($conn, $_POST['first']);
	$last = mysqli_real_escape_string($conn, $_POST['last']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
	
	$sql = "insert into users (user_first, user_last, user_email, user_uid, user_pwd)
								values(?, ?, ?, ?, ?);";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)){
		echo "SQL error";
	} else {
		mysqli_stmt_bind_param($stmt, "sssss", $first, $last, $email, $uid, $pwd );//five s because five string parameters
		mysqli_stmt_execute($stmt);
	}

	header("Location: ../index.php?signup=success");
?>