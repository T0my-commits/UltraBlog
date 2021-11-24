<?php

//on créé un nouvel user dans la base de données, on vérifie tous les champs. Suite à cela on va sur la page principale du blog

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


	//vérification du nom bien attribué
	if(empty($_GET['nom'])){
		$message=$message." il faut renseigner le nom </br>";
	}

	else 
		$nom =filter_var($_GET['nom'], FILTER_SANITIZE_STRING);

	//vérification du prénom bien attribué
	if(empty($_GET['prenom'])){
		$message=$message." il faut renseigner le prénom </br>";
	}

	else 
		$prenom= filter_var($_GET['prenom'], FILTER_SANITIZE_STRING);

	
	if(!empty($message)){
		echo $message;
	}

	else{
		require	('User.php');
		$user = new User($nom, $prenom, $login, $mdp);
		echo $user->toString();
	}

	header('Location: pagePrincipale.php');
//lors de la connexion pas de création de l'objet user


?>

























