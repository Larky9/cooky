


	<div class="clearfix">
	<div class="colonne menu">
<ul>
    <li onclick="location.href='/index.php?page=accueil';"> Accueil</li>
</ul>
</div>
<div class="column contenu">
<div class="dessous"> 		
<form action="index.php?action=login" method="post">
	
		<h2>Connectez-vous</h2>
		E-mail :<input type="text" name="login"> <br>
		Mot de passe :<input type = "password" name="password">
		<input type="submit" >	<br><br>
</form>

	<p id="alert"></p>
<form action="index.php?action=inscriptionUser" onmouseenter="inMethod()" onmouseout="out()" action="index.php?action=inscription" method="post" id="form">
		<h2>Ou inscrivez-vous</h2>
		Nom :<input  type="text" name="nom" placeholder="name" id="n" onchange="changeName()" required><br><br>
		Prénom :<input  type="text" name="prenom"><br><br>
		Login:<input  type="text" name="login"><br><br>
		Mot de Passe :<input  type="text" name="password"><br><br>
		E-mail<input  type="text" name="mail"  name="mail" placeholder="mail" id="mail" ><br><br>
		Age:  <input type="number" size="6" name="age" min="3" max="99" value="21"><br><br>
		Adresse: <input  type="text" name = "adresse"><br><br>
		Numéro élève: <input type="text" name = "numero_eleve"><br><br>

	</form>
	<center> <button onclick="verifyMail();">Valider</button> </center>
    <script type="text/javascript" src="Vue/index.js"></script>
	</div>	
</div>
</div>
	

		</body>
