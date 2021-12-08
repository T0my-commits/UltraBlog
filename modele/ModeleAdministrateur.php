<?php

class ModeleAdministrateur {
	
	/**
	 * Constructeur de la classe.
	*/ 
	function __construct() {
		// foo
	}

	public static function isConnect()
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
			
			return new Administrateur($_SESSION['nom'], $_SESSION['prenom'], $_SESSION['login']);
		}
	}

	/**
	 * Méthode qui permet à un utilisateur de se connecter
	 * @param string $login, login de l'utilisateur
	 * @param string $motdepasse, mot de passe de l'utilisateur
	 * @return true si la connexion a fonctionné, dans le cas contraire retourne false
	*/
	public static function Connection(string $login, string $motdepasse) : bool {
		global $dsn, $username, $password;
		// on se connecte à la base de données
		$gw = new GatewayAdministrateur(new Connexion($dsn, $username, $password));
		return $gw->SeConnecter($login, $motdepasse);
	}
}
