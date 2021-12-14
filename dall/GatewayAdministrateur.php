<?php

class GatewayAdministrateur {

	private $con;

	function __construct(Connexion $con) {
		$this->con = $con;
	}

	/**
	 * Fonction qui permet à un administrateur de se connecter
	 * @return bool Retourne true si ok, false si ko
	*/
	public function SeConnecter(string $login, string $motdepasse) : array {
		global $dVueErreur;
		//requête pour vérifier qu'un couple login + mdp existe dans la BD;
		$query = "SELECT id,login,nom,prenom FROM membres WHERE login=:login AND motdepasse=:motdepasse";	
		$argv = array(":login" => array($login, PDO::PARAM_STR),
			":motdepasse" => array($motdepasse, PDO::PARAM_STR));

		//execution de la requête
		$this->con->executeQuery($query, $argv);
		return $this->con->getResults();
	}


	/**
	 * Fonction qui permet à un administrateur de se connecter
	 * @return bool Retourne true si ok, false si ko
	*/
	public function Inscription(string $nom, string $prenom, string $login, string $motdepasse) : bool {
		//requête pour vérifier qu'un couple login + mdp existe dans la BD;
		$query = "INSERT INTO membres(login, motdepasse, nom, prenom, d_inscription) VALUES(:login, :motdepasse, :nom, :prenom, CURDATE())";	
		$argv = array(":login" => array($login, PDO::PARAM_STR),
			":motdepasse" => array($motdepasse, PDO::PARAM_STR),
			":nom" => array($nom, PDO::PARAM_STR),
			":prenom" => array($prenom, PDO::PARAM_STR));

		//execution de la requête
		$status=$this->con->executeQuery($query, $argv);
		return $status;
	}

	/**
	 * Méthode qui permet de vérifier si un login est dans la BD
	 * @return bool true si présent, false sinon
	*/
	public function IsLoginInBD(string $login) : bool {
		//requête pour vérifier qu'un couple login + mdp existe dans la BD;
		$query = "SELECT * FROM membres WHERE login = :login";	
		$arg = array(":login" => array($login, PDO::PARAM_STR));

		//execution de la requête
		$this->con->executeQuery($query, $arg);
		if (count($this->con->getResults()) != 0) return true;
		else return false;
	}
}

?>
