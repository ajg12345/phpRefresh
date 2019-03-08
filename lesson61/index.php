<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>generate unique string in php</title>

</head>
<body>
<?php
	/*
	function generateKey() {	//this is good but maybe not unique for a db concern
		$keyLength = 8;
		$str = "1234567890abcdefghijklmnopqrstuvwxyz()/$";
		$randStr = substr(str_shuffle($str), 0, $keyLength);		//shuffle() only shuffles arrays, this does strings
		return $randStr;
	}	
	*/
	/*
	function generateKey() {
		//$randStr = uniqid();	//about 13 characters whic his based on the current time format
		
		//you could also use a prefix like below:
		//this example below is not good for secure data, but just for avoiding collisions
		//like on filenames, lets say, creating filenames for pictures on upload.
		//or allowing a user to create their own auto-generated passwords
		$randStr = uniqid('aaron', true);	//the true adds punctuation and extra random characters.
		
		return $randStr;
	}	
	*/
	$conn = mysqli_connect("localhost", "root", "", "php62");
	
	function checkKeys($conn, $randStr) {
		$sql = "SELECT * FROM keystring";
		$result = mysqli_query($conn, $sql);
		
		while ($row = mysqli_fetch_assoc($result)) {
			if($row['keystringkey'] == $randStr){
				$keyExists = true;
				break;
			} else {
				$keyExists = false;
			}
		}
		return $keyExists;
	}
	function generateKey($conn) {	//this is good but maybe not unique for a db concern
		$keyLength = 1;
		$str = "abcdefg";
		$randStr = substr(str_shuffle($str), 0, $keyLength);		//shuffle() only shuffles arrays, this does strings
		
		$keyCheck = checkKeys($conn, $randStr);
		
		while ($keyCheck == true ){
			$randStr = substr(str_shuffle($str), 0, $keyLength);		//shuffle() only shuffles arrays, this does strings
			$keyCheck = checkKeys($conn, $randStr);
		}
		return $randStr;
	}	
	echo generateKey($conn);
	
?>
</body>
</html>