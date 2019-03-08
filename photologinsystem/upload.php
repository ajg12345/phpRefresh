<?php
session_start();
include_once "dbh.php";
$id = $_SESSION['id'];

if (isset($_POST['submit'])) {
	$file = $_FILES['file'];
	$fileName = $file['name'];
	$fileTmpName = $file['tmp_name'];
	$fileSize = $file['size'];
	$fileError = $file['error'];
	$fileType = $file['type'];
	
	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));
	
	$allowed = array('jpg', 'jpeg', 'png');
	if (in_array($fileActualExt, $allowed)){
		if ($fileError === 0){
			if ($fileSize < 10000000){
				$fileNameNew = "profile".$id.".".$fileActualExt;	
				$fileDestination = 'upload/'.$fileNameNew;
				move_uploaded_file($fileTmpName, $fileDestination);
				$sql = "UPDATE profileimg SET STATUS=1 WHERE USER_ID = '$id';";
				header("Location: index.php?uploadsucess");
			} else {
				echo "Your file was too big.";
			}
		} else {
			echo "There was an error uploading your file.";
		}
	} else {
		echo "You cannot upload files of this type!";
	}
}

?>