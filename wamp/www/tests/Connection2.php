<!DOCTYPE html PUBLIC>


<html lang= "fr">
<head>
<title>Flex Grid le site</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" media="screen" type="text/css" href="styles/FlexGrid.css" />
</head>
<body>
<div id="conteneur">
	<div id="header"></div>
	<div id="menu">
		<br></br>
		<a href="./Accueil.php">Accueil</a>
		<a href="./Formulaire.php">Inscription</a>
	</div>
	<div id="corps" style="text-indent: 0px;">
	<form method="post" action="Transition2.php">
	<div id ="connection">
		<label for="pseudocompte">Ton pseudo :</label>
		<input type="text" name="pseudocompte" id="pseudocompte" placeholder="Ex : JeanTodeDu19" size="25" maxlength="15" required autofocus></code>
		<br /><br />
		<label for="passcompte">Ton mot de passe :</label>
		<input type="password" name="passcompte" id="passcompte" required ></code>
		<br /><br />
		<p>
		<input type="submit" value="Connection" ></code>
		</p>
		</div>
	</form>
<div id="haut">
			<a href="#conteneur"></a>
			</div>
	</div>
	<div id="footer">
		<b> Epikart Copyright - Tous droits réservés © 2016 </b>
	</div>
</div>
</body>
</html>