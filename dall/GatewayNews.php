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

		// on renvoi les résultats;
		return new News($res);
	}

	/**
	 * Fonction qui permet de trouver une news ou un ensemble de news qui ont la même date de publication
	 * @param string $dateNews c'est une string car SQL est capable de faire la this->conversion
	 * @return News[] un ensemble de news ayant la même date de publication
	*/
	function FindNewsByDate(string $dateNews) : array {
		$query = "SELECT * FROM News WHERE dateNews=:dateNews";
		$argv = array(":dateNews" => array($dateNews, PDO::PARAM_STR));

		// on récupère les news par date;
		$this->con->executeQuery($query, $argv);
		$res = $this->con->getResults();

		// on stock ces news dans des instances de News dans un tableau;
		foreach ($res as $r) {
			$news[] = new News($r);
		}

		// on retourne les news;
		return $news;
	}

	/**
	 * Fonction qui permet de trouver une news ou un ensemble de news qui appartiennent au même intervalle d'id
	 * @param int $deb id du premier id de l'intervalle
	 * @return int $fin id du dernier id de l'intervalle
	*/
	function FindNewsRange(int $deb, int $fin) : array {
		$query = "SELECT * FROM News WHERE id BETWEEN :deb AND :fin";
		$argv = array(":deb" => array($deb, PDO::PARAM_INT),
			":fin" => array($fin, PDO::PARAM_INT));

		// on exécute la requête
		$this->con->executeQuery($query, $argv);
		$res = $this->con->getResults();

		// on ajoute les résultats dans un tableau;
		foreach ($res as $r) {
			$news[] = new News($r);
		}

		// on retourne les résultats;
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
		$nb = $this->con->executeQuery($query, []);

		// on retourne le nombre de News;
		return $nb;
	}

	/**
	 * Function qui insert une news dans la base de données
	 * @return bool true si erreur, false sinon
	*/
	function InsertNews(int $idMembre, string $contenu) : bool {
		$query = "INSERT INTO News() VALUES(:idMembre, NOW(), :this->contenu)";
		$argv = array(":idMembre" => array($idMembre, PDO::PARAM_INT),
			":dateNews" => array($dateNews, PDO::PARAM_STR),
			":this->contenu" => array($this->contenu, PDO::PARAM_STR)
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
		$argv = array(":id" => array($id, PDO::PARAM_INT));

		// on supprime la news;
		$status = $this->con->executeQuery($query, $argv);

		// on retourne le code erreur de executeQuery();
		return $status;
	}
}

?>
