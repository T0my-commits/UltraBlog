<?php

class Administrateur {

	private $idMembre;
	private $nom;
	private $prenom;
	private $login;

	public function __construct(int $idMembre,string $nom, string $prenom, string $login) {
		$this->idMembre = $idMembre;
		$this->nom = $nom;
		$this->prenom = $prenom;
		$this->login = $login;
		return $this;
	}

//getter

	public function getIdMembre() : int{
		return $this->idMembre;
	}

	public function GetNom() : string {
		return $this->nom;
	}

	public function GetPrenom() : string {
		return $this->prenom;
	}

	public function GetLogin() : string {
		return $this->login;
	}

//setter

	public function SetIdMembre($idMembre) {
		$this->idMembre = $idMembre;
	}

	public function SetNom($nom) {
		$this->nom = $nom;
	}

	public function SetPrenom($prenom) {
		$this->prenom = $prenom;
	}

	public function SetLogin($login) {
		$this->login = $login;
	}


//toString

	public function toString() : string {
		return $this->idMembre." ".$this->nom." ".$this->prenom." ".$this->login;
	}

}

?>
