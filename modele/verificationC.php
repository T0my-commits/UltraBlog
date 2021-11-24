<?php

//on vérifie si l'utilisateur est bien existant dans la base de données, je n'ai pas encore fait ça mais ici on vérifie au moins si les login et mdp sont bien des chaîne de cara et on va sur la page principale du blog

	$message="";

	//vérification du login bien attribué
	if(empty($_GET['login'])){
		$message=$message." il faut renseigner le login </br>";
	}

	else 
		$prenom= filter_var($_GET['login'], FILTER_SANITIZE_STRING);

	//vérification du mot de passe bien attribué
	if(empty($_GET['mdp'])){
		$message=$message." il faut renseigner le mot de passe </br>";
	}

	else 
		$prenom= filter_var($_GET['mdp'], FILTER_SANITIZE_STRING);

	header('Location: pagePrincipale.php');


?>
