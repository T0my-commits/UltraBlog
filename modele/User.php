<?php

class User {
	protected $idUser;
	protected $nom;
	protected $prenom;
	protected $login;

	function __construct(int $idUser, string $nom, int $prenom, string $login){
		$this->idUser=$idUser;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->login=$login;
		return $this;
	}

	public function  toString() : string{
		return $this->idUser." ".$this->nom." ".$this->prenom." ".$this->login;
	}

	public function creerCommentaire(string $com) {
		GatewayUser gu = new GatewayUser();
		gu->InsertCom();
	}
}


?>
