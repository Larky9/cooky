<?php
$login = $_POST['ulogin'];
$password = $_POST['upassword'];
if ($login=="abc" && $password=="123")
{
	include "Vue/cook.html";
}
else 
{
	include "Vue/error.php";
}
?>