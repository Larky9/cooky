<?php
$nom = $_POST['nom'];
$mail = $_POST['mail'];
$prenom = $_POST['prenom'];
$adresse = $_POST['adresse'];
$age = $_POST['age'];
$numero_eleve = $_POST['numero_eleve'];
$login = $_POST['login'];
$password = $_POST['password'];

include "Model/user.php";
include "Model/model.php";

$pass = password_hash($password,PASSWORD_DEFAULT);

$model = new Model();

$createdUser = new User($nom,$prenom,$mail,$age,$adresse,$numero_eleve,$login,$pass);
$user = $model->getUserByEmail($createdUser->getMail());

if ($user==null){
	$model->createUser($createdUser);
	include_once "Vue/created.php";
}else {
	include_once "Vue/existing.php";
}
?>