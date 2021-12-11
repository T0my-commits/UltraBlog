<?php

class Administrateur {

	private string $nom;
	private string $prenom;
	private string $login;

	public function __construct(string $nom, string $prenom, string $login) {
		$this->nom = $nom;
		$this->prenom = $prenom;
		$this->login = $login;
		return $this;
	}

//getter

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
		return $this->nom." ".$this->prenom." ".$this->login;
	}

}

?>
