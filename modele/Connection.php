<?php
class Connection extends PDO { 

	private $stmt;

	/**
	 * Constructeur de la classe
	 * @param string $dsn Data Source Name
	 * @param string $username Nom d'utilisateur de la base de données
	 * @param string $password Mot de passe de la base de données
	*/
	public function __construct(string $dsn, string $username, string $password) { 

	parent::__construct($dsn,$username,$password); 
	$this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} 
	 

	/** 
	 * Méthode qui permet d'éxécuter une requête SQL
	 * @param string $query 
        * @param array $parameters * 
        * @return bool Retourne true si ok, false si ko
	*/ 

	public function executeQuery(string $query, array $parameters = []) : bool{ 
		$this->stmt = parent::prepare($query); 
		foreach ($parameters as $name => $value) { 
		 $this->stmt->bindValue($name, $value[0], $value[1]); 
		} 

		return $this->stmt->execute(); 
	}

	/**
	 * Méthode qui permet de récupérer les résultats d'une requête SQL
	 * @return array Retourne la liste des résultats
	*/
	public function getResults() : array {
	 return $this->stmt->fetchall();

	}
}

?>
