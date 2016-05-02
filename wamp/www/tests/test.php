<?php
$bdd = new PDO('mysql:host=localhost;dbname=testi;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO:;ERMODE_EXCEPTION));
$reponse = $bdd->query('SELECT pseudo,mdp FROM testi');

?>