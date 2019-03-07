<?php	//https://www.youtube.com/watch?v=y4GxrIa7MiE&index=52&list=PL0eyrZgxdwhwBToawjm9faF1ixePexft- 
		//33:12
	session_start();
	include_once 'dbh.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>photo login system</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php
	$sql = "SELECT * FROM users;";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			$id = $row['id'];
			$sqlImage = "SELECT * FROM profileimg where user_id=".$id.";";
			$resultImage = mysqli_query($conn, $sqlImage);
			while ($rowImg = mysqli_fetch_assoc($resultImage)) {	//now we can spit out the stuff inside the browser
				echo "<div class='user-container'>";
					if ($rowImg['status'] == 1) {
						echo "<img src='uploads/profile".$id.".jpg?'".mt_rand().">";	//adding some random number so that the browser knows this is a new image, so refresh
					} else {
						echo "<img src='uploads/profiledefault.jpg'>";
					}
					echo "<p>".$row['user_uid']."</p>";
				echo "</div>";
				
			}
		}
		
	} else {
		echo "There are no users yet!";
	}

	if (isset($_SESSION['id'])) {
		if ($_SESSION['id'] == 1) {
			echo "You are logged in as user #1";
		}
		echo '<form action="upload.php" method="POST" enctype="multipart/form-data">	
				<input type="file" name="file">
				<button type="submit" name="submit">UPLOAD</button>
				</form>';
	} else {
		echo "You are not logged in!";
		echo "<form action='signup.php' method='POST'> 
				<input type='text' name='first' placeholder='First Name'>
				<input type='text' name='last' placeholder='Last Name'>
				<input type='text' name='uid' placeholder='UserName'>
				<input type='password' name='pwd' placeholder='password'>
				<button type='submit' name='submitSignup'>Signup</button>
				
			 </form>";
	}
?>


<p>Login as a user</p>
<form action="login.php" method="POST" >	
	<button type="submit" name="submitLogin">LOGIN</button>
</form>

<p>Logout as a user</p>
<form action="logout.php" method="POST" >	
	<button type="submit" name="submitLogout">LOGOUT</button>
</form>


</body>
</html>