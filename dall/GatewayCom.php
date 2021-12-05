<?php

class GatewayCom{
	private $con;

	function __construct(Connexion $con){
		$this->con=$con;
	}

	/**
	 * Fonction qui permet de trouver un commentaire grâce à l'id d'une news
	 * @param int $idNews identifiant d'une news
	 * @return un tableau de commentaires
	*/
	function FindCom(int $idNews) : array{

		//requête pour récuperer le commentaire en fonction de l'idNews
		$query='SELECT * FROM commentaires WHERE idNews=:idNews';	
		$arg=array(":idNews"=>array($idNews, PDO::PARAM_INT));

		//execution de la requête
		$status = $this->con->executeQuery($query,$arg);
		$res=$this->con->getResults();

		foreach($res as $row)
			$coms[]=new Commentaires($row);

		//renvoie un tableau de commentaires
		return $coms;
	}

	function FindAllCom() : array{

		//requête pour récupérer tous les commentaires
		$query='SELECT *FROM commentaires';
		$this->con->executeQuery($query);
		$res=$this->con->getResults();
		foreach($res as $row)
			$com[]=new Commentaires($row['id']);

		//renvoie un tableau de commentaires
		return $com;
	}


	/**
	 * Fonction qui permet de compter tous les commentaires du blog
	 * @return un entier qui est le nombre total de commentaires
	*/
	function CountAllCom():int {
		$query = 'SELECT COUNT(*) FROM commentaires';
		$res = $this->con->executeQuery($query);

		//retourne le résultat
		return $res;
	}


	/**
	 * Fonction qui permet de compter les commentaires d'une news
	 * @param int $idNews identifiant d'une news
	 * @return un entier qui est le nombre total de commentaires pour la news rentrée en paramètre
	*/
	function CountByNews(int $idNews):int{
		$query = 'SELECT COUNT(*) FROM commentaires WHERE $idNews=:idNews';
		$arg = array(':idNews'=>array($idNews,PDO::PARAM_INT)); 
		$res = $this->con->executeQuery($query, $arg);

		//retourne le résultat
		return $res;

	}


	/**
	 * Fonction qui permet d'insérer un commentaire dans la base de données
	 * @param int $id identifiant du commentaires, string $login le login de la personne qui écrit le commentaire,int $idNews identifiant d'une news, string $contenu le contenu du commentaire
	 * @return un bool true si succès, false pour erreur
	*/
	function InsertCom(int $id, string $login, int $idNews, string $contenu):bool{

		$query='INSERT INTO commentaires VALUES (:id, :login, :idNews, :contenu)';
		$arg=array(	':id'=> array($id,PDO::PARAM_INT),
				':login'=>array($login,PDO::PARAM_STR),
				':idNews'=>array($idNews,PDO::PARAM_STR),
				':contenu'=>array($contenu,PDO::PARAM_STR));

		//insertion du commentaire dans la base de données
		$status=$this->con->executeQuery($query, $arg);

		//retourne le code d'erreur de la méthode executeQuery
		return $status;						
	}


	/**
	 * Fonction qui permet d'insérer un commentaire dans la base de données
	 * @param int $id identifiant du commentaires, string $login le login de la personne qui écrit le commentaire,int $idNews identifiant d'une news, string $contenu le contenu du commentaire
	 * @return un bool true si succès, false pour erreur
	*/
	function SupprimerCom(int $id):bool{

		$query='"DELETE FROM commentaires WHERE id=:id"';
		$arg=array(':id'=> array($id,PDO::PARAM_INT));

		//on supprime le commentaire
		$status=$this->con->executeQuery($query, $arg);
		
		//on retourne le code d'erreur de la méthode executeQuery
		return $status;			

	}

}

?>

















	
