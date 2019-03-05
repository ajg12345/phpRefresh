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
/* this will select all users
	$sql = "select * from users;";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);

	if ($resultCheck > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			echo $row['user_uid']."<br>";
		}
	}
*/
$data = "3";
//created a template, then create the prepared statement
$sql = "select * from users where id = ?;";
//create a prepared statement
$stmt = mysqli_stmt_init($conn);
//prepare the prepared statment with a check for failure -- if fails)
if (!mysqli_stmt_prepare($stmt,$sql)){
	echo "SQL statment failed";
} else {
	//BIND PARAMETERS TO THE PLACEHOLDER. "s" stands for string, then the variable
	mysqli_stmt_bind_param($stmt, "s", $data);
	//run parameters inside database
	mysqli_stmt_execute($stmt);
	$result = mysqli_stmt_get_result($stmt);
}

while ($row = mysqli_fetch_assoc($result)) {
		echo $row['user_first']."<br>";
}

?>

						


</body>




</html>
