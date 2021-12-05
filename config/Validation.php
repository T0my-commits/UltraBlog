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
	static function ValidConnexion(string &$nom, string &$motdepasse, array &$dVueErreur) : bool {
		//vérification du login bien attribué
		if(!isset($login) || $login = "" || $login = " ")
			$dVueErreur[] = " il faut renseigner le login";
		else 
			$login = filter_var($login, FILTER_SANITIZE_STRING);


		//vérification du mot de passe bien attribué
		if(!isset($motdepasse) || $motdepasse = "" || $motdepasse = " ")
			$dVueErreur[] = " il faut renseigner le mot de passe";
		else 
			$motdepasse = filter_var($motdepasse, FILTER_SANITIZE_STRING);


		// on retourne le code erreur
		if (empty($dVueErreur)) 	return true;
		else 						return false;
	}

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

	public static function ValiderNews(int $id, array &$dVueErreur) : void{
		if(!isset($id) || $id="" || $id=" ")
			$dVueErreur[]="la new n'existe pas";
		else
			$id = filter_id($id, FILTER_SANITIZE_INT);
		if(!empty($dVueErreur))
			throw new Exception();

	}


	public static function ValiderAjoutNews(int $idMembre, string $titre, string $contenu){
		if(!isset($idMembre) || $idMembre="" || $idMembre=" ")
			$dVueErreur[]="l'utilisateur n'existe pas";
		else
			$idMembre = filter_var($idMembre, FILTER_SANITIZE_INT);

		if(!isset($titre) || $titre="" || $titre=" ")
			$dVueErreur[]="il faut renseigner le titre";
		else
			$titre = filter_var($titre, FILTER_SANITIZE_STRING);

		if(!isset($contenu) || $contenu="" || $contenu=" ")
			$dVueErreur[]="il faut renseigner le contenu";
		else
			$contenu = filter_var($contenu, FILTER_SANITIZE_STRING);

		if (empty($dVueErreur)) 	
			return true;
		else 						
			return false;
	
	}
}

?>
