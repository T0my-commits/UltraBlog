<?php

class User {
	protected $nom;
	protected $prenom;
	protected $email;
	protected $tel;
	protected $login;

	function __construct(string $nom, int $prenom, string $email, string $tel, string $login) {
		$this->nom = $nom;
		$this->prenom = $prenom;
		$this->login = $login;
		$this->email = $email;
		$this->tel = $tel;
		return $this;
	}

	public function  toString() : string{
		return $this->idUser." ".$this->nom." ".$this->prenom." ".$this->login;
	}

	/*
	public function creerCommentaire(string $com) {
		GatewayUser gu = new GatewayUser();
		gu->InsertCom();
	}
	*/
}


?>
