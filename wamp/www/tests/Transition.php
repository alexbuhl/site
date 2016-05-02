<?php
session_start();
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
		if($_SESSION['pseudo'] == $_POST['pseudocompte'] AND $_SESSION['mdp'] == $_POST['passcompte'])
		{
		?>
			Connection réussie. <br></br>
			L'accés au site se fait par <a href="./FlexGrid.php">Ici</a>
		<?php
		}
		else
		{
		echo 'Pseudo ou mot de passe incorrecte, veuillez vous reconnecter ';
		echo '<a href="./Connection.php">ici</a>';		
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