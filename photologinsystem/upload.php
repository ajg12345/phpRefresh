<?php
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
				$fileNameNew = preg_replace('/[.]/', '',uniqid('',true)).".".$fileActualExt;	//creates a unique number based on microseconds and without extra periods.
				$fileDestination = 'upload/'.$fileNameNew;
				move_uploaded_file($fileTmpName, $fileDestination);
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