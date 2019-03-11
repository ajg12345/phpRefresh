<?php
include_once "dbh.inc.php";

if (isset($_POST['submit'])){
	$newFileName = $_POST['filename'];
	if (empty($_POST['filename'])){
		$newFileName = "gallery";	//later this will be a random id to avoid collisions
	} else {
		$newFileName = strtolower(str_replace(" ", "-", $newFileName));
	}
	$imageTitle = $_POST['filetitle'];
	$imageDesc = $_POST['filedesc'];
	
	$file = $_FILES["file"];
	
	$fileName = $file["name"];
	$fileType = $file["type"];
	$fileTempName = $file["tmp_name"];
	$fileError = $file["error"];
	$fileSize = $file["size"];
	
	$fileExt = explode(".", $fileName);
	$fileActualExt = strtolower(end($fileExt));
	
	$allowed = array("jpg", "jpeg", "png");
	if (in_array($fileActualExt, $allowed)){
		if ($fileError === 0){
			if ($fileSize < 10000000){
				if (empty($imageTitle) || empty($imageDesc)) {
					header("Location: ../index.php?upload=empty");
					exit();
				} else {
					$fileNameNew = $newFileName.".".uniqid("", true).".".$fileActualExt;	//adding punctuation in the filename. to segment unique markers.
					$fileDestination = '../img/gallery/'.$fileNameNew;	
					move_uploaded_file($fileTempName, $fileDestination);
					$sql = "SELECT * FROM gallery";
					$stmt = mysqli_stmt_init($conn);
					if (!mysqli_stmt_prepare($stmt, $sql)){
						echo "SQL select statement failed";
					} else {
						mysqli_stmt_execute($stmt);
						$result = mysqli_stmt_get_result($stmt);
						$rowCount = mysqli_num_rows($result);
						$setImageOrder = $rowCount + 1;		
						
						$sql = "INSERT INTO gallery(titleGallery, descGallery, imgFullNameGallery, orderGallery) VALUES (?,?,?,?)";
						$stmt = mysqli_stmt_init($conn);
						if (!mysqli_stmt_prepare($stmt, $sql)){
							echo "SQL insert statement failed";
						} else {
							mysqli_stmt_bind_param($stmt, "ssss", $imageTitle, $imageDesc, $fileNameNew, $setImageOrder );
							mysqli_stmt_execute($stmt);
							
							move_uploaded_file($fileTempName, $fileDestination);
							
							header("Location: ../index.php?uploadSuccess");
						}
					}
				}
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

