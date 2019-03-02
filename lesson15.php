<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>the calculator example</title>
</head>

<body>
<form>
	<input type="text" name="num1" placeholder="number 1">
	<input type="text" name="num2" placeholder="number 2">
	<select name="operator">
		<option>None</option>
		<option>Add</option>
		<option>Subtract</option>
		<option>Multiply</option>
		<option>Divide</option>
	</select>
	<br>
	<button type="submit" name="submit" value="submit"> Calculate</button>
</form>
<p>The answer is:</p>
<?php
	if (isset($_GET['submit'] )) {
		$result1 = $_GET['num1'];
		$result2 = $_GET['num2'];
		$operator = $_GET['operator'];
		switch ($operator){
			case "None":
				echo "error, please select an operator and try again.";
				break;
			case "Add":
				echo $result1 + $result2;
				break;
			case "Subtract":
				echo $result1 - $result2;
				break;
			case "Multiply":
				echo $result1 * $result2;
				break;
			case "Divide":
				echo $result1 / $result2;
				break;
		}
	}
?>
</body>

</html>