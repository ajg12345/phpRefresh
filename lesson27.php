<?php
include "header.php";
//GET and POST superglobals
/*
$GLOBALS
$_POST
$_GET
$_COOKIE
$_SESSION
//good for a login system
*/
setcookie("name", "Daniel", time() + 86400);	//easier for hacker to see
$_SESSION['name'] = "12";	//hacker can't see this typically (bc in session)

?>


</body>

</html>