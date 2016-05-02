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
	</div>
	<div id="corps" style="text-indent: 0px;">	
	<form method="post" action="Connection.php">
 
   <fieldset>
       <legend>Vos coordonnées</legend>

        <label for="nom">Quel est votre nom ?</label>
	    <br />
        <input type="text" name="nom" id="nom" placeholder="Ex : Tode" required autofocus ></code>
		<br></br>
        <label for="prenom">Quel est votre prénom ?</label>
	    <br />
        <input type="text" name="prenom" id="prenom" placeholder="Ex : Jean" required ></code>
		<p>
			Veuillez indiquer la tranche d'âge dans laquelle vous vous situez :<br />
			<input type="radio" name="age" value="moins15" id="moins15" /> <label for="moins15">Moins de 15 ans</label><br />
			<input type="radio" name="age" value="medium15-25" id="medium15-25" /> <label for="medium15-25">15-25 ans</label><br />
			<input type="radio" name="age" value="medium25-40" id="medium25-40" /> <label for="medium25-40">25-40 ans</label><br />
			<input type="radio" name="age" value="plus40" id="plus40" /> <label for="plus40">Plus de 40 ans</label>
		</p>
		<p>
			Veuillez indiquer votre sexe :<br />
			<input type="radio" name="sexe" value="Homme" id="Homme" /> <label for="Homme">Homme</label><br />
			<input type="radio" name="sexe" value="Femme" id="Femme" /> <label for="Femme">Femme</label><br />
			<input type="radio" name="sexe" value="Autre" id="Autre" /> <label for="Autre">Autre</label><br />			
		</p>
        <label for="email">Quel est votre e-mail ?</label>
	    <br />
        <input type="email" name="email" id="email" placeholder="Ex : JeanTodeDu19@epita.fr" required ></code>
		<br></br>
		<label for="pays">Dans quel pays habitez-vous ?</label><br />
		<select name="pays" id="pays">
			<optgroup label="Europe">
               <option value="france">France</option>
               <option value="espagne">Espagne</option>
               <option value="italie">Italie</option>
               <option value="royaume-uni">Royaume-Uni</option>
			</optgroup>
			<optgroup label="Amérique">
               <option value="canada">Canada</option>
               <option value="etats-unis">Etats-Unis</option>
			</optgroup>
			<optgroup label="Asie">
               <option value="chine">Chine</option>
               <option value="japon">Japon</option>
			</optgroup>
		</select>
	</fieldset>
	
	<fieldset>
       <legend>Votre compte</legend> 	   
			<p>
				<label for="pseudo">Votre pseudo :</label>
				<input type="text" name="pseudo" id="pseudo" placeholder="Ex : JeanTodeDu19" size="30" maxlength="15" required ></code>
				<br /><br />
				<label for="pass">Votre mot de passe :</label>
				<input type="password" name="pass" id="pass" required ></code>
				<br /><br />
				<label for="pass2">Retapez votre mot de passe :</label>
				<input type="password" name="pass2" id="pass2" required ></code>
			</p>
	</fieldset>
	
	<fieldset>
       <legend>Sondage</legend> 
 
        <p>
           Quel est votre fréquence de jeu ?

           <input type="radio" name="frequence" value="jamais" id="jamais" /> <label for="Jamais">Jamais</label>
           <input type="radio" name="frequence" value="occasionnellement" id="occasionnellement" /> <label for="Occasionnellement">Occasionnellement</label>
           <input type="radio" name="frequence" value="Tout le temps" id="Tout le temps" /> <label for="Tout le temps"> Tout le temps</label>
		</p>  
		<p>  
		   Comment vous nous avez connu ?
		   <input type="radio" name="connu" value="famille" id="famille" /> <label for="famille">Par votre famille</label>
           <input type="radio" name="connu" value="amis" id="amis" /> <label for="amis">Par des amis</label>
           <input type="radio" name="connu" value="internet" id="internet" /> <label for="internet">Par internet</label>
           <input type="radio" name="connu" value="autre" id="autre" /> <label for="autre">Autre...</label>
        </p>
	   
        <p>
           <label for="precisions">Si "Autre", veuillez préciser :</label>
           <textarea name="precisions" id="precisions" cols="40" rows="4"></textarea>
        </p>
    </fieldset>
	
	<p align= "center">
		<input type="submit" value="Envoyer" ></code>
	</p>
</form>
<div id="haut">
			<a href="#conteneur"> Haut de la page</a>
			</div>
	</div>
	<div id="footer">
		<b> Epikart Copyright - Tous droits réservés © 2016 </b>
	</div>
</div>
</body>
</html>