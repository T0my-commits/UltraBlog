<?php

class GatewayAdministrateur {

	private $con;

	function __construct(Connection $con) {
		$this->con = $con;
	}

	/**
	 * Fonction qui permet de trouver un utilisateur grâce à son id
	 * @param int $idUser identifiant d'un utilisateur
	 * @return un tableau d'utilisateur
	*/
	function FindUser(int $idUser) : array {

		//requête pour récuperer le commentaire en fonction de l'idNews
		$query='SELECT *FROM users WHERE idUser=:idUser';	
		$arg=array(":idUser"=>array($idUser, PDO::PARAM_INT));

		//execution de la requête
		$con->executeQuery($query,$arg);
		$res=$this->con->getResults();
		foreach($res as $row)
			$user[]=new User($row['id']);

		//renvoie un tableau de commentaires
		return $user;	
	}


	/**
	 * Fonction qui permet de trouver une news ou un ensemble de news qu'a un utilisateur
	 * @param int $idUser identifiant d'un utilisateur
	 * @return News[] un ensemble de news ayant la même date de publication
	*/
	function FindNews(int idUser) : News[] {
		$query = "SELECT * FROM  WHERE dateNews=:dateNews";
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
	 * Fonction qui permet d'insérer un utilisateur dans la base de données
	 * @param int $idUser identifiant de l'utilisateur, string $nom nom de l'utilisateur, string $prenom prenom de l'utilisateur, string $login le login de la personne
	 * @return un bool true si succès, false pour erreur
	*/
	function InsertUser(int $idUser, string $nom, int $prenom, string $login) : bool {

		$query='INSERT INTO users VALUES (:idUser, :nom, :prenom, :login)';
		$arg=array(	':idUser'=> array($idUser,PDO::PARAM_INT),
				':nom'=>array($nom,PDO::PARAM_STR),
				':prenom'=>array($prenom,PDO::PARAM_STR)
				':login'=>array($login,PDO::PARAM_STR));

		//insertion du commentaire dans la base de données
		$status=$this->con->executeQuery($query, $arg);

		//retourne le code d'erreur de la méthode executeQuery
		return $status;						
	}


	/**
	 * Fonction qui permet à un administrateur de se connecter
	 * @return bool Retourne true si ok, false si ko
	*/
	public function SeConnecter(string $login, string $motdepasse) : bool {

		//requête pour récuperer le commentaire en fonction de l'idNews
		$query="SELECT login,nom,prenom,motdepasse FROM membres WHERE login=:login,motdepasse=:motdepasse";	
		$arg = array(":login" => array($login, PDO::PARAM_STR),
			":motdepasse" => array($motdepasse, PDO::PARAM_STR));

		//execution de la requête
		$this->con->executeQuery($query, $arg);
		$res = $this->con->getResults();

		// vérification des résultats
		if (!empty($res)) 	return true;
					 else 	return false;

		/*
		if (!empty($res)) {
			$login = $res[0];
			$nom = $res[1];
			$prenom = $res[2];
			$motdepasse = $res[5];
			$user = new Administrateur($nom, $prenom, $login, $motdepasse);
		}
		else
			$user = NULL;
		*/
	}
}

?>
