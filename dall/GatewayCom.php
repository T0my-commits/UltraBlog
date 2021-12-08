<?php

class GatewayCom{
	private $con;

	function __construct(Connexion $con) {
		$this->con = $con;
	}

	/**
	 * Fonction qui permet de trouver un commentaire grâce à l'id d'une news
	 * @param int $idNews identifiant d'une news
	 * @return un tableau de commentaires
	*/
	function FindCom(int $idNews) : array {

		// requête pour récuperer les commentaires triés par ordre descroissant;
		$query = 'SELECT * FROM commentaires WHERE idNews=:idNews ORDER BY id DESC';	
		$arg = array(":idNews" => array($idNews, PDO::PARAM_INT));

		// execution de la requête;
		$status = $this->con->executeQuery($query,$arg);
		$res=$this->con->getResults();

		$coms = array();
		foreach($res as $row)
			$coms[] = new Commentaires($row);

		//renvoie un tableau de commentaires
		return $coms;
	}

	function FindAllCom() : array {

		//requête pour récupérer tous les commentaires
		$query = 'SELECT *FROM commentaires';
		$this->con->executeQuery($query);
		$res = $this->con->getResults();

		$coms = array();
		foreach($res as $row)
			$com[] = new Commentaires($row['id']);

		//renvoie un tableau de commentaires
		return $com;
	}


	/**
	 * Fonction qui permet de compter tous les commentaires du blog
	 * @return un entier qui est le nombre total de commentaires
	*/
	function CountAllCom() : int {
		$query = 'SELECT COUNT(*) FROM commentaires';
		$status = $this->con->executeQuery($query);
		$res=$this->con->getResults();

		//retourne le résultat
		return $res;
	}


	/**
	 * Fonction qui permet de compter les commentaires d'une news
	 * @param int $idNews identifiant d'une news
	 * @return un entier qui est le nombre total de commentaires pour la news rentrée en paramètre
	*/
	function CountByNews(int $idNews) : int {
		$query = 'SELECT COUNT(*) FROM commentaires WHERE idNews=:idNews';
		$arg = array(':idNews'=>array($idNews,PDO::PARAM_INT)); 
		$status = $this->con->executeQuery($query, $arg);
		$res=$this->con->getResults();
		//retourne le résultat
		return $res[0][0];

	}


	/**
	 * Fonction qui permet d'insérer un commentaire dans la base de données
	 * @param int $id identifiant du commentaires, string $login le login de la personne qui écrit le commentaire,int $idNews identifiant d'une news, string $contenu le contenu du commentaire
	 * @return un bool true si succès, false pour erreur
	*/
	function AddCom(string $login, string $contenu, int $idNews) {

		$query = 'INSERT INTO commentaires(login, idNews, contenu) VALUES (:login, :idNews, :contenu)';
		$arg = array(':login' => array($login, PDO::PARAM_STR),
				':idNews' => array($idNews, PDO::PARAM_STR),
				':contenu' => array($contenu, PDO::PARAM_STR));

		//insertion du commentaire dans la base de données
		$status = $this->con->executeQuery($query, $arg);

		// s'il y a eu une erreur, on lève une exception;
		if (!$status) throw new Exception();		
	}


}

?>

















	
