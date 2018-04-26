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
		case "forum":
			include "Vue/publication.html";
			break;
		default:
			include "Vue/home.php";
			break;
	}
}else if ($action){
	switch ($action) {
	case 'login':
		include_once "Controler/login.php";
		break;
	case 'inscriptionUser':
		include_once "Controler/inscription.php";
		break;
	default:
		break;
}
}else {
	checkLoggedIn();
	showPage("Vue/home.php");
}
?>