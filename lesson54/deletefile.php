<?php
$fileNames = $_POST['filename'];
$removeSpaces = str_replace(" ", "", $fileNames); //strip spaces of input
$allFileNames = explode(",",$removeSpaces);	//put each input into array
$countAllNames = count($allFileNames);

for($i=0; $i < $countAllNames; $i++) {
	if (!file_exists("uploads/".$allFileNames[$i])) {
		header("Location: index.php?oneOrMoreFilesMissing");
		exit();
	}
}
for($i=0; $i < $countAllNames; $i++) {
	$path = "uploads/".$allFileNames[$i];
	if (!unlink($path)){
		header("Location: index.php?deletionerror");
		exit();
	}
}

header("Location: index.php?deletesuccess");
?>