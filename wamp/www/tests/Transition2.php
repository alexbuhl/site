<?php
$bdd = new PDO('mysql:host=localhost;dbname=base_de_donnee;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
$reponse = $bdd->query('SELECT pseudo,mdp FROM base_formulaire');
$b = true;

session_start();
$_SESSION['pseudo'] = $_POST['pseudocompte'];
$_SESSION['pass'] = $_POST['passcompte'];
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
	<br></br>
	<div id="connection">
	<?php
		while($donnees = $reponse->fetch() AND $b == true)
		{
			if($donnees['pseudo'] == $_POST['pseudocompte'] AND $donnees['mdp'] == $_POST['passcompte'])
			{
				$b = false;
				?>
			Connection réussie. <br></br>
			L'accés au site se fait par <a href="./FlexGrid.php">ici</a>.
			<?php
			}
			else
			{
				echo 'Pseudo ou mot de passe incorrecte, veuillez vous reconnecter ';
				echo '<a href="./Connection2.php">ici</a>';	
			}
		}
		?>
	</div>
	<br></br>
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