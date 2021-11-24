<?php

class GatewayCom{
	private $con;

	function __construct(Connection $con){
		$this->con=$con;
	}

//cette fonction permet de trouver un commentaire grâce à l'id d'une news
	function FindCom(int $idNews) : array{
		$query='SELECT *FROM commentaires WHERE idNews=:idNews';	//requête pour récuperer le commentaire
		$args=array(":idNews"=>array($idNews, PDO::PARAM_INT);
		$con->executeQuery($query,$args);
		$res=$con->getResults();
		foreach($res as $row)
			$com[]=new Commentaires($row['id']);
		return $com;	//renvoie un tableau de commentaires
	}

//permet de compter tous les commentaires du blog
	function CountAllCom():int {
		$query= 'SELECT COUNT(*) FROM commentaires';
		$con->executeQuery($query);
		$res=$con->getResults();
		return $res;
	}

	function CountByNews(int $idNews):int{
		$query= 'SELECT COUNT(*) FROM commentaires WHERE $idNews=:idNews';
		$con->executeQuery($query);
	

	}

	function InsertCom(int $id, string $texte, int $idNews){

	$query='INSERT INTO commentaires VALUES (:id,:texte, :idNews)';
	$arg=array(	':id'=> array($id,PDO::PARAM_INT),
			':texte'=>array($texte,PDO::PARAM_STR),
			':idNews'=>array($idNews,PDO::PARAM_STR));
	$con->executeQuery($query, $arg);
					

	}

	
	function InsertCom(int $id, string $texte, int $idNews){

	$query='INSERT INTO commentaires VALUES (:id,:texte, :idNews)';
	$arg=array(	':id'=> array($id,PDO::PARAM_INT),
			':texte'=>array($texte,PDO::PARAM_STR),
			':idNews'=>array($idNews,PDO::PARAM_STR));
	$con->executeQuery($query, $arg);
					

	}



















	
