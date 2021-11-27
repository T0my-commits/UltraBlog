<?php

class Validation {

	/**
	 * Méthode qui permet de vérifier qu'on essaye bien de valider un formulaire
	*/
    static function ValidAction($action) {

        if (!isset($action))
        	throw new Exception("pas d'action");
    }
	
	/**
	 * Méthode qui permet de vérifier que le formulaire d'inscription à bien été renseigné
	 * @return bool true si ok, false si ko
	*/
	static function ValidInscription(string $nom, string $prenom, string $email, string $tel, string $login, string $motdepasse) : bool {
		
		//vérification du login bien attribué
		if(!isset($login) || $login = "")
			$dVueErreur[] = " il faut renseigner le login";
		else 
			$login = filter_var($login, FILTER_SANITIZE_STRING);


		//vérification que l'email est bien attribué
		if(!isset($email) || $email = "")
			$dVueErreur[] = " il faut renseigner le email";
		else 
			$email = filter_var($email, FILTER_SANITIZE_STRING);


		//vérification du mot de passe bien attribué
		if(!isset($motdepasse) || $motdepasse = "")
			$dVueErreur[] = " il faut renseigner le mot de passe";
		else 
			$motdepasse = filter_var($motdepasse, FILTER_SANITIZE_STRING);


		//vérification du nom bien attribué
		if(!isset($nom) || $nom = "")
			$dVueErreur[] = " il faut renseigner le nom";
		else 
			$nom = filter_var($nom, FILTER_SANITIZE_STRING);


		//vérification du prénom bien attribué
		if(!isset($prenom) || $prenom = "")
			$dVueErreur[] = " il faut renseigner le prénom";
		else 
			$prenom = filter_var($prenom, FILTER_SANITIZE_STRING);


		//vérification du nom bien attribué
		if(!isset($tel) || $tel = "")
			$dVueErreur[] = " il faut renseigner le tel";
		else 
			$tel = filter_var($tel, FILTER_SANITIZE_STRING);


		// on retourne le code erreur
		if (empty($dVueErreur)) 	return true;
		else 						return false;
	}

	/**
	 * Méthode qui permet de vérifier que le formulaire de connexion à bien été renseigné
	 * @return bool true si ok, false si ko
	*/
	static function ValidConnexion(string $nom, string $motdepasse) : bool {
		//vérification du login bien attribué
		if(!isset($login) || $login = "")
			$dVueErreur[] = " il faut renseigner le login";
		else 
			$login = filter_var($login, FILTER_SANITIZE_STRING);


		//vérification du mot de passe bien attribué
		if(!isset($motdepasse) || $motdepasse = "")
			$dVueErreur[] = " il faut renseigner le mot de passe";
		else 
			$motdepasse = filter_var($motdepasse, FILTER_SANITIZE_STRING);


		// on retourne le code erreur
		if (empty($dVueErreur)) 	return true;
		else 						return false;
	}
}

?>
