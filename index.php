<?php

$page = $_GET['page'];
$action = $_GET['action'];


/*
if ($page=="accueil"){
	
}else {
	
}*/
function checkLoggedIn(){
	session_start();
	if (!$_SESSION["user"]){
		header("Location: index.php?page=login");
	}
}

if($page){
	switch ($page) {
		case 'accueil':
			include "Vue/cook.html";
			break;
		case "inscription":
			include "Vue/home.php";
			break;
		default:
			include "Vue/home.php";
			break;
	}
}
else if ($action){
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
}
else {
	checkLoggedIn();
	showPage("Vue/home.php");
}
?>