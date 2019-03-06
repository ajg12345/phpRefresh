<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>arrays in PHP</title>

</head>
<body>
<?php

$data = array();	//empty array, but you can load it with this as well.
$data[] = "Daniel";		//insert data into array (at the end)
array_push($data, "Peter");	//insert with a function
array_push($data, "Bill", 23);	//insert 2 elements with a function
print_r($data);

echo $data[0];

?>
</body>