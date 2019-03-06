<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>database results and Arrays</title>

</head>
<body>
<?php
	include_once "dbh.php";
	
	$sql = "SELECT * FROM data;";
	$result = mysqli_query($conn, $sql);
	$datas = array();
	if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)) {
			$datas[] = $row;
		}
	}
	
	//datas is a multidimensional array
	//this will print the text column of every row
	foreach ($datas as $data) {
		echo $data['text']."<br>";
	}
	echo "<br><br><br>";
	//this will print each column of the first row
	foreach ($datas[0] as $data) {
		echo $data." ";
	}
	
	//php also has a associative array feature:
	echo "<br><br><br>";
	$assoc_data = array("first" => "Daniel", "last" => "Nielsen", "age" => 25);
	print_r($assoc_data);
	
	echo "<br><br><br>";
	//and these arrays can be built on the fly:
	$assoc_data2["street"] = "Mozart st.";
	$assoc_data2["city"] = "Chicago";
	print_r($assoc_data2);
	
	echo "<br><br><br>";
	//you can get arrays in arrays if you pull data from a database
	$multi_data = array(
		array(1, 2, 3),
		"John",
		"Jane");
	print_r($multi_data);
?>
</body>