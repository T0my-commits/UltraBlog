<?php

class ModeleNews {

	/**
	 * Constructeur de la classe.
	*/ 
	function __construct() {
		// foo
	}
	
	/**
	 * Méthode qui permet de sélectionner un nombre de news qui appartiennent à un même intervalle d'id
	 * @param int $page le numero de la page demandé
	 * @param int $nbNewsParPage le nombre de news max par page
	 * @return array la plage de news sélectionnée
	*/
	public function GetNewsPage(int $page, int $nbNewsParPage) : array {
		global $dsn, $username, $password;
		$ng = new GatewayNews(new Connexion($dsn, $username, $password));
		$deb = $nbNewsParPage * ($page-1);
		$fin = $deb + ($nbNewsParPage-1);
		$news = $ng->FindNewsRange($deb, $fin);
		return $news;
	}

	public function CountAllNews() : int {
		global $dsn, $username, $password;
		$ng = new GatewayNews(new Connexion($dsn, $username, $password));
		$nbNewsTotal = $ng->CountAll();

		return $nbNewsTotal;
	}

	public function GetNews(int $idnews) : News{
		global $dsn, $username, $password;
		$ng = new GatewayNews(new Connexion($dsn, $username, $password));
		$news = $ng-> FindNewsById($idnews);
		return $news;
	}

	public function GetCom(int $idnews) : array{
		global $dsn, $username, $password;
		$cg = new GatewayCom(new Connexion($dsn, $username, $password));
		$commentaire = $cg-> FindCom($idnews);
		return $commentaire;
	}

}

?>
