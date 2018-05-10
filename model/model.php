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

		$stmt = $this->connexion->prepare("INSERT INTO `user`( `nom`, `prenom`, `mail`, `age`, `adresse`, `numero_eleve`, `login`, `password`) VALUES (:nom,:prenom,:mail,:age,:adresse,:numero_eleve,:login,:password);");
		$stmt->bindParam(':nom', $user->getNom());
		$stmt->bindParam(':prenom', $user->getPrenom());
		$stmt->bindParam(':mail', $user->getMail());
		$stmt->bindParam(':age', $user->getAge());
		$stmt->bindParam(':adresse', $user->getAdresse());
		$stmt->bindParam(':numero_eleve', $user->getNumero_eleve());
		$stmt->bindParam(':login', $user->getLogin());
		$stmt->bindParam(':password', $user->getPassword());
		$stmt->execute();
	}
	function getUserByEmail($mail){
		$sql =  "SELECT * FROM `user` WHERE mail='".$mail."'";
		$user = null;
		
	    foreach  ($this->connexion->query($sql) as $row) {
	    	$user = new User($row['nom'],$row['prenom'],$row['mail'],$row['age'],$row['adresse'],$row['numero_eleve'],$row['login'],$row['password']);
	  	}
	  	return $user;
	}
	function getPostesByTitres($titres){
		$sql = "SELECT * FROM `postes` WHERE titres='".$titres."'";
		$postes = null;
		foreach  ($this->connexion->query($sql) as $row) {
	    	$postes = new Post($row['titres'],$row['recettes'],$row['ingredients']);
	  	}
	  	return $postes;
	}
	function getPostes(){
		$sql = "SELECT * FROM `postes` WHERE 1 ";
		$postes = null;
		foreach  ($this->connexion->query($sql) as $row) {
	    	$postes = new Post($row['titres'],$row['recettes'],$row['ingredients']);
	  	}
	  	return $postes;
	}
	function createPoste($postes){
		$stmt = $this->connexion->prepare("INSERT INTO `postes`(`titres`, `recettes`, `ingredients`) VALUES (:titres,:recettes,:ingredients);");
		$stmt->bindParam(':titres', $postes->getTitres());
		$stmt->bindParam(':recettes', $postes->getRecettes());
		$stmt->bindParam(':ingredients', $postes->getIngredients());
		$stmt->execute();

	}
}
?>