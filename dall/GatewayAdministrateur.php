<?php

class GatewayAdministrateur{
	private $con;

	function __construct(Connection $con){
		$this->con=$con;
	}

	/**
	 * Fonction qui permet à un administrateur de se connecter
	 * @return bool Retourne true si ok, false si ko
	*/
	function static SeConnecter(string $login, string $motdepasse) : bool {

		//requête pour récuperer le commentaire en fonction de l'idNews
		$query="SELECT login,nom,prenom,email,tel,motdepasse FROM membres WHERE login=:login,motdepasse=:motdepasse";	
		$arg=array(":login" => array($login, PDO::PARAM_STR),
			":motdepasse" => array($motdepasse, PDO::PARAM_STR));

		//execution de la requête
		$con->executeQuery($query, $arg);
		$res = $con->getResults();

		// vérification des résultats
		if (!empty($res))
			return true;
		else
			return false;

		/*
		if (!empty($res)) {
			$login = $res[0];
			$nom = $res[1];
			$prenom = $res[2];
			$email = $res[3];
			$tel = $res[4];
			$motdepasse = $res[5];
			$user = new Administrateur($nom, $prenom, $email, $tel, $login, $motdepasse);
		}
		else
			$user = NULL;
		*/

		//renvoie un tableau de commentaires
		return $user;	
	}