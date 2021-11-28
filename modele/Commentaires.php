<?php

class Commentaires {
	
	private int $id;
	private string $login;
	private int $idNews;
	private string $contenu;

	function __construct() {
		$ctp = func_num_args();
		$args = func_get_args();

		switch ($ctp) {
			case 1:
				$this-&gt;__construct1($args[0]);
				break;
			
			case 4:
				$this-&gt;__construct3($args[0],$args[1],$args[2],$args[3]);
				break;
		}
	}

	function __construct1(Commentaire $com) {
		this=$com;
		return this;
	}

	function __construct4(int $id, string $login, int $idNews, string $contenu){
		$this->id=$id;
		$this->login=$login;
		$this->idNews=$idNews;
		$this->contenu=$contenu;
		return $this;
	}
//faire la fonction to string



	/**
	 * Méthode qui permet à un utilisateur d'écrire un commentaire
	 * @return true si l'insertion a fonctionné, dans le cas contraire retourne false
	*/
	public static function EcrireCom():bool{
		$gw = new GatewayCom(new Connexion($dsn, $username, $password));
		$isOk=$gw->InsertCom($id, $login, $idNews, $contenu);
		if ($isOk) 	
			return true;
		else 	
			return false;
	}

	/**
	 * Méthode qui permet à un utilisateur d'effacer une news
	 * @return true si l'insertion a fonctionné, dans le cas contraire retourne false
	*/
	public static function SupprimerCom():bool{
		$gw = new GatewayCom(new Connexion($dsn, $username, $password));
		SupprimerCom( $id);
		if ($isOk) 	
			return true;
		else 	
			return false;
	}




}

?>
