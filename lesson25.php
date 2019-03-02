<?php

/*
$GLOBALS
$_POST
$_GET
$_COOKIE
$_SESSION
//good for a login system
*/

$x = 5;
//we could pass $x to the function ... or...
function something() {
	echo $GLOBALS['x'];
	$y = 10;
}
something();
?>

</body>

</html>