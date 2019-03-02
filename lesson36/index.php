<?php
	include_once 'includes/dbh.inc.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>lesson37 returning data</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	
<?php

	$sql = "select * from users;";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);

	if ($resultCheck > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			echo $row['user_uid']."<br>";
		}
	}

?>

						


</body>




</html>
