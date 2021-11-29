<?php

class Administrateur extends User {

	private $motdepasse;

	public function __construct(string $nom, int $prenom, string $email, string $tel, string $login, string $motdepasse) {
		$this->motdepasse = $motdepasse;
		parent::_construct($nom, $prenom, $email, $tel, $login);
	}

	public function toString() : string {
		//parent::toString(string $nom, int $prenom, string $login);
		//return $this->motdepasse;
	}


	/**
	 * Méthode qui permet à un utilisateur de se connecter
	 * @param string $login, login de l'utilisateur
	 * @param string $motdepasse, mot de passe de l'utilisateur
	 * @return true si la connexion a fonctionné, dans le cas contraire retourne false
	*/
	public static function SeConnecter(string $login, string $motdepasse) : bool {
		global $dsn, $username, $password;
		// on se connecte à la base de données
		$gw = new GatewayAdministrateur(new Connexion($dsn, $username, $password));
		$isOk = $gw->SeConnecter($login, $motdepasse);
		if ($isOk) 	
			return true;
		else 	
			return false;
	}




}

?>
