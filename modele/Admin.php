<?php

class Admin extends User{
	private $mdp;

	public function __constrcut(string $mdp){
		$this->mdp=$mdp;
		parent::_construct(int $idUser, string $nom, int $prenom, string $login)
	}

	public function  toString() : string{
		parent::toString(int $idUser, string $nom, int $prenom, string $login)
		return $this->mdp;
	} 
}

//je ne suis vraiment pas sûre de ce que j'ai fait pour cette classe il faudra qu'on voit ensemble quand on pourra.

?>

