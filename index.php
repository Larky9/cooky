<?php

$page = $_GET['page'];
$action = $_GET['action'];
echo $page and $action;
if($page == $action ){
	$page="inscription";
}


/*
if ($page=="accueil"){
	
}else {
	
}*/

function showPage($page){

	include_once "Vue/header.html";
	include_once $page;
	include_once "Vue/footer.html";
}
function checkLoggedIn(){
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