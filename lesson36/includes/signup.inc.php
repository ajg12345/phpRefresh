	
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
//the code below doesn't take the post command directly which is good,
//the next step for security is prepared statements.
	$first = mysqli_real_escape_string($conn, $_POST['first']);
	$last = mysqli_real_escape_string($conn, $_POST['last']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
	
	$sql = "insert into users (user_first, user_last, user_email, user_uid, user_pwd)
values('".$first."', '".$last."', '".$email."', '".$uid."', '".$pwd."');";
	$result = mysqli_query($conn, $sql);


	header("Location: ../index.php?signup=success");
?>