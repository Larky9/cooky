<?php
session_destroy();
$nom = $_POST['nom'];
$mail = $_POST['mail'];
$prenom = $_POST['prenom'];
$adresse = $_POST['adresse'];
$age = $_POST['age'];
$numero_eleve = $_POST['numero_eleve'];
$login = $_POST['login'];
$password = $_POST['password'];

include "model/user.php";
include "model/model.php";

$pass = password_hash($password,PASSWORD_DEFAULT);

$model = new Model();

$createdUser = new User($nom,$prenom,$mail,$age,$adresse,$numero_eleve,$login,$pass);
$user = $model->getUserByEmail($createdUser->getMail());

if ($user==null){
	session_start();
	$model->createUser($createdUser);
	$user = $model->getUserByEmail($createdUser->getMail())->getMail();
	$_SESSION["user"] = serialize($user);
	header ("Location: index.php?page=accueil");
}
else{
	showPage("Vue/existing.php");
}
?>