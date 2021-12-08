<?php

class Administrateur {

	private string $nom;
	private string $prenom;
	private string $login;

	public function __construct(string $nom, int $prenom, string $login) {
		$this->nom = $nom;
		$this->prenom = $prenom;
		$this->login = $login;
		return $this;
	}

//getter

	public function getNom():string{
		return $nom;
	}

	public function getPrenom():string{
		return $prenom;
	}

	public function getLogin():string{
		return $login;
	}

	public function getMdp():string{
		return $motdepasse;
	}

//setter

	public function setNom($nom){
		$this->nom=$nom;
	}

	public function setPrenom($prenom){
		$this->prenom=$prenom;
	}

	public function setLogin($login){
		$this->login=$login;
	}

	public function setMdp($motdepasse){
		$this->motdepasse=$motdepasse;
	}


	public function toString() : string {
		return $this->nom." ".$this->prenom." ".$this->login;
	}

}

?>
