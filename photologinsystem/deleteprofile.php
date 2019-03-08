<?php
session_start();
include_once "dbh.php";
//find active user
$sessionid = $_SESSION['id'];	//session id from user who is logged in.

//fine user's image filename
$filename = "uploads/profile".$sessionid."*";
$fileinfo = glob($filename);	//might get multiple results like profile1, profile11 etc.
$fileext = explode(".", $fileinfo[0]); 
$fileactualext = $fileext[1];

$file = "uploads/profile".$sessionid.".".$fileactualext;

//delete the file
if (!unlink($file)) {
	echo "File was not deleted!";
} else {
	echo "File was deleted!";
}

//update the database to ensure that the user looks liek without image
$sql = "UPDATE profileimg SET status=0 WHERE user_id = '$sessionid';";
mysql_query($conn, $sql);

Header("Location: index.php?deletesuccess");

?>