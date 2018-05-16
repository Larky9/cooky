<?php

$page = $_GET['page'];
$action = $_GET["action"];



function showPage($page){

	include "Vue/header.html";
	echo $_SESSION["user"];
	include_once $page;
	include "Vue/footer.html";
}
function checkLoggedIn(){
	echo 'login';
	session_start();
	if (!$_SESSION["user"]){
		header("Location: index.php?action=login");
	}
}

if($page){
	switch ($page) {
		case 'accueil':
			showPage("Vue/cook.html");
			break;
		case "inscription":
			showPage("Vue/home.php");
			break;
		case "deco":
			showPage("Vue/deco.php");
			break;
		case "forum":
			showPage("Vue/publication.html");
			break;
		case "recette":
			showPage("Vue/recette.html");
			break;
		default:
			checkLoggedIn();
			showPage("Vue/home.php");
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
	case 'post':
		include_once "Controler/postcont.php";
		break;
	default:
		include "Vue/home.php";
		break;
}
}else {
	checkLoggedIn();
	showPage("Vue/home.php");
}

?>