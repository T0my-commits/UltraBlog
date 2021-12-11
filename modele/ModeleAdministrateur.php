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
				&& isset($_SESSION['login'])
				&& isset($_SESSION['nom'])
				&& isset($_SESSION['prenom']))
		{
			if ($_SESSION['role'] != "administrateur")
				return NULL;
			
			Validation::Valider_STR($_SESSION['nom']);
			Validation::Valider_STR($_SESSION['prenom']);
			Validation::Valider_STR($_SESSION['login']);

			// ---------------------------------- verifier que l'admin existe avec appel à la gateway !!!
			
			return new Administrateur($_SESSION['nom'], $_SESSION['prenom'], $_SESSION['login']);
		}
	}

	/**
	 * Méthode qui permet à un utilisateur de se connecter
	 * @param string $login, login de l'utilisateur
	 * @param string $motdepasse, mot de passe de l'utilisateur
	 * @return true si la connexion a fonctionné, dans le cas contraire retourne false
	*/
	public static function Connection(string $login, string $motdepasse) {
		global $dsn, $username, $password;

		// on vérifie si le couple login + modepasse existe dans la BD
		$gw = new GatewayAdministrateur(new Connexion($dsn, $username, $password));
		$member = $gw->SeConnecter($login, $motdepasse);

		// si l'utilisateur existe et que les données sont validées, on ajoute le role en session;
		if ($member != NULL)
		{
			$_SESSION['role'] = "administrateur";
			$_SESSION['login'] = $login;
			$_SESSION['nom'] = $member[0]['nom'];
			$_SESSION['prenom'] = $member[0]['prenom'];
		}
	}
}
