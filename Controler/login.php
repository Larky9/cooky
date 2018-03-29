<?php

$login = $_POST['login'];
$password = $_POST['password'];

switch ($login=="abc" && $password=="123") {
	case true;
    include "Vue/success.php";
	break;
default:
		include "Vue/error.php";
	break;
	
}

?>