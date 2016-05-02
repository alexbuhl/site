<?php
session_start();

$_SESSION['prenom'] = $_POST['prenom'];
$_SESSION['nom'] = $_POST['nom'];
$_SESSION['pseudo'] = $_POST['pseudo'];
$_SESSION['mdp'] = $_POST['pass'];
$bdd = new PDO('mysql:host=localhost;dbname=base_de_donnee;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
$req = $bdd->prepare('INSERT INTO base_formulaire(nom, pseudo, mdp, age, sexe, pays, email, frequence_jeu, connaissance, prenom) VALUES(:nom, :pseudo, :mdp, :age, :sexe, :pays, :email, :frequence_jeu, :connaissance, :prenom)');
$req->execute(array(
	'nom' => $_POST['nom'],
	'pseudo' => $_POST['pseudo'],
	'mdp' => $_POST['pass'],
	'age' => $_POST['age'],
	'sexe' => $_POST['sexe'],
	'pays' => $_POST['pays'],
	'email' => $_POST['email'],
	'frequence_jeu' => $_POST['frequence'],
	'connaissance' => $_POST['connu'],
	'prenom' => $_POST['prenom']
	));
?>

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
	<form method="post" action="Transition.php">
	<div id ="connection">
        Bienvenue <?php echo $_SESSION['prenom'].' '.$_SESSION['nom'];  ?> !<br></br>
		Ton compte vien d'être créé, essaye de te connecter : <br></br>
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