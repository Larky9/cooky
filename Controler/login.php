<?php
session_start();

$_SESSION['prenom']=$_POST[prenom];
$_SESSION['nom']=$_POST[nom];

echo $_SESSION['prenom'] . ' ' . $_SESSION['nom'];

$login = $_POST['login'];
$password = $_POST['password'];

include "Model/user.php";
include "Model/model.php";

$model = new Model();
$user = $model->getUserByEmail($login);
if (password_verify($password,$user ->getPassword())){
	session_start();
	$user = $user->getMail();
	$_SESSION["user"] = serialize($user);
	header ("Location: index.php?page=accueil");

} 
else {
	echo "<font color=red size=5> <center>  Essaie encore, ton mot de passe est probablement faux ! </center> </font>" ;
	showPage("Vue/home.php") ;
	
	
}
?>