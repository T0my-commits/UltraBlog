<?php

class Administrateur extends User{
	private $motdepasse;

	public function __construct(string $nom, int $prenom, string $email, string $tel, string $login, string $motdepasse) {
		$this->motdepasse = $motdepasse;
		parent::_construct($nom, $prenom, $email, $tel, $login)
	}

	public function toString() : string {
		parent::toString(int $idUser, string $nom, int $prenom, string $login)
		return $this->motdepasse;
	}

	public static function SeConnecter(string $login, string $motdepasse) : bool {
		// on se connecte à la base de données
		$gw = new GatewayAdministrateur();
		$gw->SeConnecter($login, $motdepasse);
	}
}

?>
