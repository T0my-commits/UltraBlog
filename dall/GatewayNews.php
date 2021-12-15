<?php

class GatewayNews {

	private $con;

	function __construct(Connexion $con) {
		$this->con = $con;
	}

	/**
	 * Fonction qui permet de rechercher une news dans la base de données et de la renvoyer
	 * @return News[] La news ayant l'id passé en paramètre
	*/
	function FindNewsById(int $id) : News {
		$query = "SELECT * FROM News WHERE id=:id";
		$argv = array(":id" => array($id, PDO::PARAM_INT));

		// on exécute la recherche;
		$this->con->executeQuery($query, $argv);
		$res = $this->con->getResults();

		// on renvoi une news
		return new News($res[0]);
	}

	/**
	 * Méthode qui teste si une news existe
	 * @return true si ok, false sinon
	*/
	function IsNewsExist(int $id) : bool {
		$query = "SELECT * FROM News WHERE id=:id";
		$argv = array(":id" => array($id, PDO::PARAM_INT));

		// on exécute la recherche;
		$this->con->executeQuery($query, $argv);
		$res = $this->con->getResults();

		// on renvoi une news
		if ($res != NULL) return true;
		else return false;
	}

	/**
	 * Fonction qui permet de trouver une news ou un ensemble de news qui ont la même date de publication
	 * @param string $dateNews c'est une string car SQL est capable de faire la this->conversion
	 * @return News[] un ensemble de news ayant la même date de publication
	*/
	function FindNewsByDate(string $dateNews) : array {
		$query = 'SELECT * FROM News WHERE dateNews=:dateNews';
		$argv = array(":dateNews" => array($dateNews, PDO::PARAM_STR));

		// on récupère les news par date;
		$this->con->executeQuery($query, $argv);
		$res = $this->con->getResults();

		// on stock ces news dans des instances de News dans un tableau;
		$news = array();
		foreach ($res as $r) {
			$news[] = new News($r);
		}

		// on retourne la news;
		return $news;
	}

	/**
	 * Fonction qui permet de trouver une news ou un ensemble de news qui appartiennent au même intervalle d'id
	 * @param int $deb id du premier id de l'intervalle
	 * @return int $fin id du dernier id de l'intervalle
	*/
	function FindNewsRange(int $deb, int $fin) : array {
		$query = "SELECT id,titre,idMembre,dateNews,contenu FROM News WHERE id BETWEEN :deb AND :fin ORDER BY id DESC";
		$argv = array(":deb" => array($deb, PDO::PARAM_INT),
			":fin" => array($fin, PDO::PARAM_INT));
		$news= array();
		// on exécute la requête
		$this->con->executeQuery($query, $argv);
		$res = $this->con->getResults();

		// on ajoute les résultats dans un tableau;
		foreach ($res as $r) {
			array_push($news, new News($r));
			//$news[] = new News($r);
		}

		// on retourne les résultats;
		//var_dump($news);
		return $news;
	}

	/**
	 * Fonction qui retourne toutes les news
	 * @return News[] toutes les news de la BD
	*/
	function FindAll() : array {
		$query = "SELECT * FROM News";

		// on éxécute la requête;
		$this->con->executeQuery($query, []);
		$res = $this->con->getResults();

		// on ajoute les résultats dans un tableau;
		foreach ($res as $r) {
			$news[] = new News($r);
		}

		// on retourne les résultats;
		return $news;
	}

	/**
	 * Fonction qui compte le nombre de news total
	 * @return int le nombre de news total dans la BD
	*/
	function CountAll() : int {
		$query = "SELECT COUNT(*) FROM News";

		// on éxécute la requête;
		$this->con->executeQuery($query, []);
		$nb = $this->con->getResults();

		// on retourne le nombre de News;
		return $nb[0]["COUNT(*)"];
	}

	/**
	 * Méthode qui retouve une news en fonction d'un admin
	*/
	function NewsByAdmin(int $id, int $idMembre) {
		$query = "SELECT * FROM News WHERE id=:id AND idMembre=:idMembre";
		$argv = array(":id" => array($id, PDO::PARAM_INT),
				":idMembre" => array($idMembre, PDO::PARAM_INT));
	
		$news = $this->con->executeQuery($query, $argv);
		$res = $this->con->getResults();
		if($res[0]!=NULL)
			return new News($res[0]);
		return NULL;
	

	}

	/**
	 * Function qui insert une news dans la base de données
	 * @return bool true si erreur, false sinon
	*/
	function InsertNews(int $id, int $idMembre, string $titre, string $contenu) : bool {
		$query = "INSERT INTO News(id, idMembre, dateNews, titre, contenu) VALUES(:id, :idMembre, CURDATE(),:titre, :contenu)";
		$argv = array(":idMembre" => array($idMembre, PDO::PARAM_INT),
			":id" => array($id, PDO::PARAM_INT),
			":titre" => array($titre, PDO::PARAM_STR),
			":contenu" => array($contenu, PDO::PARAM_STR)
		);

		// on insert la news dans la base de données;
		$status = $this->con->executeQuery($query, $argv);

		// on retourne le code d'erreur de la méthode executeQuery;
		return $status;
	}

	/**
	 * Fonction qui supprime une news
	 * @return bool true si erreur, false si succès
	*/
	function DeleteNews(int $id) : bool {
		$query = "DELETE FROM News WHERE id=:id";
		$argv = array(	":id" => array($id, PDO::PARAM_INT));

		// on supprime la news;
		$status = $this->con->executeQuery($query, $argv);

		// on retourne le code erreur de executeQuery();
		return $status;
	}
}

?>
