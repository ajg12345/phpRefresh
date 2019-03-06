<?php
$dbServername = "localhost";	//this is a localhost server using xampp
$dbUsername = "";
$dbPassword = "";
$dbName = "test";

$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());

}
?>
