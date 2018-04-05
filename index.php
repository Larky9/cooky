<?php

$page = $_GET['page'];
$action = $_GET['action'];


/*
if ($page=="accueil"){
	
}else {
	
}*/
switch ($page) {
	case 'accueil':
		include "Vue/home.php";
		break;
	case "inscription":
		include "Vue/home.php";
		break;
	default:
		include "Vue/home.php";
		break;
}
switch ($action) {
	case 'login':
		include "Controler/login.php";
		break;
	case 'inscriptionUser':
		include "Controler/inscription.php";
		break;
	default:
		include "Vue/home.php";
		break;
}
?>