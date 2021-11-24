<?php

require_once("../modele/connexion.php");

class GatewayNews {

	private $con;

	function __construct(Connexion $con) {
		this->$con = $con;
	}

	/**
	 * Fonction qui permet de rechercher une news dans la base de données et de la renvoyer
	 * @return News[] La news ayant l'id passé en paramètre
	*/
	function FindNews(int $id) : News[] {
		$query = "SELECT * FROM News WHERE id=:id";
		$argv = array(":id" => array($id, PDO::PARAM_INT));

		// on exécute la recherche;
		$con->executeQuery($query, $argv);
		$res = $con->getResults();

		// on renvoi les résultats;
		return new News($res);
	}

	/**
	 * Fonction qui permet de trouver une news ou un ensemble de news qui ont la même date de publication
	 * @param string $dateNews c'est une string car SQL est capable de faire la conversion
	 * @return News[] un ensemble de news ayant la même date de publication
	*/
	function findNews(string $dateNews) : News[] {
		$query = "SELECT * FROM News WHERE dateNews=:dateNews";
		$argv = array(":dateNews" => array($dateNews, PDO::PARAM_STR));

		// on récupère les news par date;
		$con->executeQuery($query, $argv);
		$res = $con->getResults();

		// on stock ces news dans des instances de News dans un tableau;
		foreach ($res as $r) {
			$news[] = new News($r);
		}

		// on retourne les news;
		return $news;
	}

	/**
	 * Fonction qui retourne toutes les news
	 * @return News[] toutes les news de la BD
	*/
	function findAll() : News[] {
		$query = "SELECT * FROM News";

		// on éxécute la requête;
		$con->executeQuery($query, []);
		$res = $con->getResults();

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
	function countAll() : int {
		$query = "SELECT COUNT(*) FROM News";

		// on éxécute la requête;
		$con->executeQuery($query, []);
		$nb = $con->getResults();

		// on retourne le nombre de News;
		return $nb;
	}

	/**
	 * Function qui insert une news dans la base de données
	 * @return bool true si erreur, false sinon
	*/
	function insertNews(int $idMembre, string $contenu) : bool {
		$query = "INSERT INTO News() VALUES(:idMembre, NOW(), :contenu)";
		$argv = array(":idMembre" => array($idMembre, PDO::PARAM_INT),
			":dateNews" => array($dateNews, PDO::PARAM_STR),
			":contenu" => array($contenu, PDO::PARAM_STR)
		);

		// on insert la news dans la base de données;
		$status = $con->executeQuery($query, $argv);

		// on retourne le code d'erreur de la méthode executeQuery;
		return $status;
	}

	/**
	 * Fonction qui supprime une news
	 * @return bool true si erreur, false si succès
	*/
	function deleteNews(int $id) : bool {
		$query = "DELETE FROM News WHERE id=:id";
		$argv = array(":id" => array($id, PDO::PARAM_INT));

		// on supprime la news;
		$status = $con->executeQuery($query, $argv);

		// on retourne le code erreur de executeQuery();
		return $status;
	}
}

?>
