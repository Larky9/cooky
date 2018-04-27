<?php

class User
{
    private $nom;
    private $mail;
    private $prenom;
    private $id;
    private $age;
    private $adresse;
    private $numero_eleve;
    private $login;
    private $password;

    function __construct($nom,$prenom,$mail,$age,$adresse,$numero_eleve,$login,$password)
    {
        $this->nom=$nom;
        $this->mail=$mail;
        $this->age=$age;
        $this->prenom=$prenom;
        $this->adresse=$adresse;
        $this->numero_eleve=$numero_eleve;
        $this->login=$login;
        $this->password=$password;
        $this->id=$id
    }
    function getNom(){
        return $this->nom;
    }
    function getMail(){
        return $this->mail;
    }
    function getPrenom(){
        return $this->prenom;
    }
    function getAdresse(){
        return $this->adresse;
    }
    function getAge(){
        return $this->age;
    }
    function getNumero_eleve(){
        return $this->numero_eleve;
    }
    function getLogin(){
        return $this->login;
    }
    function getPassword(){
        return $this->password;
    }
    function setPassword($pass){
		$this->password=$pass;
    }
    function getId(){
        return $this->id;
}

?>