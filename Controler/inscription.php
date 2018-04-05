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
$model = new Model();
$createdUser = new User($nom,$prenom,$mail,$adresse,$age,$numero_eleve,$login,$password);
$user = $model->getUserByEmail($createdUser->getMail());
if ($user==null){
	$model->createUser($createdUser);
	include_once "Vue/created.php";
}else {
	include_once "Vue/existing.php";
}
?>