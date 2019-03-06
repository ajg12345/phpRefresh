<?php
	

	if(isset($_POST['login-submit'])){
		require 'dbh.inc.php';
		
		$mailuid = $_POST['uid'];
		$password = $_POST['pwd'];
		
		if(empty($mailuid) || empty($password)){
			header("Location: ../index.php?error=emptyfields");
			exit();			
		} else {
			$sql = "SELECT * FROM users WHERE user_uid=? OR user_email=?;";
			$stmt = mysqli_stmt_init($conn);
			if (!mysqli_stmt_prepare($stmt,$sql)) {
				header("Location: ../index.php?error=sqlerror");
				exit();
			} else {
				mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);
				mysqli_stmt_execute($stmt);
				$result = mysqli_stmt_get_result($stmt);
				if ($row = mysqli_fetch_assoc($result)) {
					$pwdCheck = password_verify($password, $row['user_pwd']);
					if ($pwdCheck == false){
						header("Location: ../index.php?error=wrongPwd");
						exit();
					} else if ($pwdCheck == true) {
						//login the user here, so we need to start a session (2 hour login session time limit)
						session_start();
						$_SESSION['userid'] = $row['id'];
						$_SESSION['useruid'] = $row['user_uid'];
						
						header("Location: ../index.php");
						exit();
						
						//original video https://www.youtube.com/watch?v=xb8aad4MRx8&list=PL0eyrZgxdwhwBToawjm9faF1ixePexft-&index=44
						//newer video (1:35) https://www.youtube.com/watch?v=LC9GaXkdxF8
						//I'd better go back to make sureI covered all of the style basis etc.
					} else {
						header("Location: ../index.php?error=wrongPwd");
						exit();
					}
				} else {
					header("Location: ../index.php?error=nouser");
					exit();
				}
			}
		}
		
	} else {
		header("Location: ../index.php");
		exit();
	}

?>