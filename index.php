<form method="GET">
		<input name = "person" type="text">
		<button>SUBMIT</button>
</form>
<?php
	//echo "Hio There!";
	$result = $_GET['person'];
	//echo $name." is a handsome fella";
	//echo str_rot13($name);
	//echo str_word_count("Hi duder");
	//echo strrev("whattup??")
	
$names = array("Daniel lost", "Daniel won", "Tie");

if ($result) {
	echo $names[0];
}
else	{
	echo $names[1];
}	

?>

<br>
<?php 
$x = 2;
switch ($x) {
	case 1:
		echo "oh no its 1";
	break;
	case 2:
		echo "oh good its 2";
	break;
	default:
	echo "I dont know what to do";
}

?>