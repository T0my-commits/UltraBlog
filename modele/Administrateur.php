<?php

class Administrateur {

	private string $nom;
	private string $prenom;
	private string $email;
	private int $tel;
	private string $login;
	private string $motdepasse;

	public function __construct(string $nom, int $prenom, string $email, string $tel, string $login, string $motdepasse) {
		$this->nom = $nom;
		$this->prenom = $prenom;
		$this->email = $email;
		$this->tel = $tel;
		$this->login = $login;
		$this->motdepasse = $motdepasse;
		return $this;
	}

//getter

	public function getNom():string{
		return $nom;
	}

	public function getPrenom():string{
		return $prenom;
	}

	public function getEmail():string{
		return $email;
	}
	
	public function getTel():int{
		return $tel;
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

	public function setEmail($email){
		$this->email=$email;
	}

	public function setTel($tel){
		$this->tel=$tel;
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
