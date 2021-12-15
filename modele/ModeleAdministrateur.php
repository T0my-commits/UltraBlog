<?php

class ModeleAdministrateur {
	
	/**
	 * Constructeur de la classe.
	*/ 
	function __construct() {
		// foo
	}

	/**
	 * Méthode qui retoure un objet admin si ok, NULL si ko
	*/
	public static function IsConnect()
	{
		global $dVueErreur;
		session_start();

		if (isset($_SESSION['role'])
				&& isset($_SESSION['idMembre'])
				&& isset($_SESSION['login'])
				&& isset($_SESSION['nom'])
				&& isset($_SESSION['prenom']))
		{
			if ($_SESSION['role'] != "administrateur")
				return NULL;
			
			Validation::Valider_INT($_SESSION['idMembre']);
			Validation::Valider_STR($_SESSION['nom']);
			Validation::Valider_STR($_SESSION['prenom']);
			Validation::Valider_STR($_SESSION['login']);

			// ---------------------------------- verifier que l'admin existe avec appel à la gateway !!!
			
			return new Administrateur($_SESSION['idMembre'], $_SESSION['nom'], $_SESSION['prenom'], $_SESSION['login']);
		}
	}

	/**
	 * Méthode qui permet à un utilisateur de se connecter
	 * @param string $login, login de l'utilisateur
	 * @param string $motdepasse, mot de passe de l'utilisateur
	 * @return true si la connexion a fonctionné, dans le cas contraire retourne false
	*/
	public static function Connexion(string $login, string $motdepasse) {
		global $dsn, $username, $password, $dVueErreur;

		// on vérifie si le couple login + modepasse existe dans la BD
		$gw = new GatewayAdministrateur(new Connexion($dsn, $username, $password));
		$member = $gw->SeConnecter($login, $motdepasse);

		// si l'utilisateur existe et que les données sont validées, on ajoute le role en session;
		if (count($member) != 0)
		{
			$_SESSION['role'] = "administrateur";
			$_SESSION['idMembre'] = $member[0]['id'];
			$_SESSION['login'] = $login;
			$_SESSION['nom'] = $member[0]['nom'];
			$_SESSION['prenom'] = $member[0]['prenom'];
		}
		else {
			$dVueErreur[] = "Mauvais login ou mot de passe";
			throw new Exception();
		}
	}

	/**
	 * Méthode qui permet à un utilisateur de s'inscrire
	*/
	public static function Inscription(string $nom, string $prenom, string $login, string $motdepasse) {
		global $dsn, $username, $password, $dVueErreur;

		// on vérifie si le couple login + modepasse existe dans la BD
		$gw = new GatewayAdministrateur(new Connexion($dsn, $username, $password));

		// si le login existe déjà, on affiche la page d'erreur;
		if ($gw->IsLoginInBD($login)) {
			$dVueErreur[] = "Le login existe déjà";
			throw new Exception("problème login");
		}

		// on inscrit le nouveau membre;
		$isMember = $gw->Inscription($nom, $prenom, $login, $motdepasse);

		// si l'utilisateur est inscrit, on le connecte automatiquement;
		if ($isMember) 
			ModeleAdministrateur::Connexion($login, $motdepasse);
		else 
			throw new Exception("problème isMember");
		
	}

	public static function AjoutNews(int $idMembre, string $titre, string $contenu){
		global $dsn, $username, $password;
		$ng = new GatewayNews(new Connexion($dsn, $username, $password));
		$idNews = 1;
		while ($ng->IsNewsExist($idNews))
			$idNews = $idNews + 1;

		$ng->InsertNews($idNews, $idMembre, $titre, $contenu);
	}

	public static function SupprimerNews(int $idNews, int $idMembre){
		global $dsn, $username, $password;
		$ng = new GatewayNews(new Connexion($dsn, $username, $password));
		$news = $ng->NewsByAdmin($idNews, $idMembre);
		if($news==NULL){
			echo $idMembre;
			throw new Exception("ce n'est pas la news de l'admin");
		}
		$ng->DeleteNews($idNews);
		
	}


}








