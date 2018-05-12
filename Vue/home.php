
<div class="dessous"> 		
<form action="index.php?action=login" method="post">
	
		<h2>Connectez-vous</h2>
		E-mail :<input type="text" name="login" required> <br>
		Mot de passe :<input type = "password" name="password" required>
		<input type="submit" >	<br><br>
</form>

	<p id="alert"></p>
<form action="index.php?action=inscriptionUser"  method="post" id="form">
		<h2>Ou inscrivez-vous</h2>
		Nom :<input  type="text" name="nom" placeholder="name" required><br><br>
		Prénom :<input  type="text" name="prenom" required><br><br>
		Login:<input  type="text" name="login" required><br><br>
		Mot de Passe :<input  type="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"  title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
		required ><br><br>
		E-mail<input  type="email" name="mail" placeholder="mail" required><br><br>
		Age:  <input type="number" size="6" name="age" min="3" max="99" value="21" required><br><br>
		Adresse: <input  type="text" name = "adresse" required><br><br>
		Numéro élève: <input type="number" name = "numero_eleve" required><br><br>
		<input type="submit"> 
	</form>
	
    <script type="text/javascript" src="Vue/index.js"></script>
	</div>	
