<?php

class User{
	protected $idUser;  //j'ai regardé sur internet normalement il faut mettre en protected mais je suis pas sûre
	protected $nom;
	protected $prenom;
	protected $login;

	function __construct(int $idUser, string $nom, int $prenom, string $login){
		$this->idUser=$idUser;
		$this->nom=$nom;
		$this->prenom=$p;
		$this->login=$l;
		return $this;
	}

	public function  toString() : string{
		return $this->idUser." ".$this->nom." ".$this->prenom." ".$this->login;
	} 
}


?>


