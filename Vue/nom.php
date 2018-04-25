<?php 
function createUser($user){
    echo $user->getNom();
    $this->connexion->exec("INSERT INTO `user`( `nom`, `prenom`, `mail`, `age`, `adresse`, `numero_eleve`, `login`, `password`) VALUES ('".$user->getNom()."',
    '".$user->getPrenom()."','".$user->getMail()."','".$user->getAge()."','".$user->getAdresse()."','".$user->getNumero_eleve()."','".$user->getLogin()."',
    '".$user->getPassword()."')");
}
?>