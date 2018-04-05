<?php
/**
* 
*/
class Model
{
	private $connexion;
	
	function __construct()
	{
		$servername = "localhost";
		$username = "root";
		$password = "root";
		try {
		    $conn = new PDO("mysql:host=$servername;dbname=cookisep", $username, $password);
		    // set the PDO error mode to exception
		    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    $this->connexion=$conn;
		    //echo "Connected successfully"; 
	    }
		catch(PDOException $e)
	    {
	    	echo "Connection failed: " . $e->getMessage();
	    }
	}
	function createUser($user){
        $this->connexion->exec("INSERT INTO `user`( `nom`, `prenom`, `mail`, `age`, `adresse`, `numero_eleve`, `login`, `password`) VALUES ('".$user->getNom()."',
        '".$user->getPrenom()."','".$user->getMail()."','".$user->getAge()."','".$user->getAdresse()."','".$user->getNumero_eleve()."','".$user->getLogin()."',
        '".$user->getPassword()."')");
	}
	function getUserByEmail($mail){
		$sql =  "SELECT * FROM `user` WHERE mail='".$mail."'";
		$user = null;
		include_once "Model/user.php";
	    foreach  ($this->connexion->query($sql) as $row) {
	    	$user = new User($row['nom'],$row['prenom'],$row['mail'],$row['age'],$row['adresse'],$row['numero_eleve'],$row['login'],$row['password']);
	  	}
	  	return $user;
	}
}
?>