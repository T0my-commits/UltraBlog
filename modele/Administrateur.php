<?php

class Administrateur {

	protected $nom;
	protected $prenom;
	protected $email;
	protected $tel;
	protected $login;
	protected $motdepasse;

	public function __construct(string $nom, int $prenom, string $email, string $tel, string $login, string $motdepasse) {
		$this->nom = $nom;
		$this->prenom = $prenom;
		$this->login = $login;
		$this->email = $email;
		$this->tel = $tel;
		$this->motdepasse = $motdepasse;
		return $this;
	}

	public function toString() : string {
		return $this->nom." ".$this->prenom." ".$this->login;
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
		return $gw->SeConnecter($login, $motdepasse);
	}
}

?>
