<?php

class User{
	private $nom;
	private $prenom;
	private $login;
	private $mdp;

	public function __constrcut(string $n, string $p, string $l, string $mdp){
		$this->nom=$n;
		$this->prenom=$p;
		$this->login=$l;
		$this->mdp=$mdp;
	}

	public function  toString() : string{
		return $this->nom." ".$this->prenom." a pour login ".$this->login." et mot de passe : ".$this->mdp;
	} 
}

//User($id,$nom, $prenom, $login, $mdp)

?>


