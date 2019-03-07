<?php
	include_once "dbh.php";
	
	$first = $_POST['first'];
	$last = $_POST['last'];
	$uid = $_POST['uid'];
	$pwd = $_POST['pwd'];

	$sql = "INSERT INTO users (user_first, user_last, user_uid, user_pwd)
	values ('$first', '$last', '$uid', '$pwd');";
	mysqli_query($conn, $sql);
	
	$sql = "SELECT * from users where user_uid = '$uid' AND user_first = '$first';";
	$result = mysqli_query($conn, $sql);
	
	//load the image id location in user
	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)){
			$userid = $row['id'];
			$sql = "INSERT INTO profileimg (user_id, status) values ('$userid', 0);";
			mysqli_query($conn, $sql);
			header("Location: index.php");
		}
	} else {
		echo "You have an error!";
	}

?>