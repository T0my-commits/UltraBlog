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
	*/
	/*static function ValidInscription(string $nom, string $prenom, string $email, string $tel, string $login, string $motdepasse, array &$dVueErreur) {
		
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


		// on lève une exception si il y a une erreur;
		if (!empty($dVueErreur)) 	throw new Exception();
	}*/

	/**
	 * Méthode qui permet de vérifier que le numéro de page est bien un paramètre attendu
	 * @return bool true si ok, false si ko
	*/
	public static function ValiderPage(int $page) : bool {
		/* Il faut vérifier :
			- que le paramètre fourni est bien un int
			- qu'il appartient à l'intervalle [0 ; nbDePageMax]
			- qu'il ne contient pas de caractères (pas de code javascript par exemple)
			- qu'il ne contient pas d'espace ou de 0 au début (pour ne pas faire planter la BD)
		*/
/*
		global $dsn, $username, $password;
		$ng = new GatewayNews(new Connexion($dsn, $username, $password));
		$nbNewsTotal = $ng->CountAll();
		$nbPagesTotal = $nbNewsParPage / $nbNewsParPage;

		// si le numero de page demandé est supérieur au nombre de pages totales;
		if ($nbPagesTotal <= $page)
			throw new Exception("La page demandée n'existe pas");
*/
			return true;
	}

	/**
	 * Méthode qui permet de vérifier qu'un nom est bien un nombre
	*/
	public static function Valider_INT(int $number) : void {
		global $dVueErreur;

		if(!isset($number))
			$dVueErreur[] = "not found (int)";
		
		if($number != filter_var($number, FILTER_SANITIZE_STRING))
			$dVueErreur[] = "tentative d'attaque";

		// on lève une exception si il y a une erreur;
		if(!empty($dVueErreur))		throw new Exception();

	}

	/**
	 * Méthode qui permet de vérifier qu'un nombre est bien un nombre
	*/
	public static function Valider_STR(string $s) {
		global $dVueErreur;

		if (!isset($s) || $s = "")
			$dVueErreur[] = "not found (str)";

		if ($s != filter_var($s, FILTER_SANITIZE_STRING))
			$dVueErreur[] = "tentative d'attaque";

		// on lève une exception si il y a une erreur;
		if(!empty($dVueErreur))		throw new Exception();
	}

}

?>
