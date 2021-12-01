<?php

class News {
	private $id;
	private $titre;
	private $idMembre;
	private $dateNews;
	private $contenu;

	/**
	 * Surcharge du constructeur de la classe.
		
	function __construct() {
		$ctp = func_num_args();
		$args = func_get_args();

		switch ($ctp) {
			case 1:
				$this-&gt;__construct1($args[0]);
				break;
			
			case 5:
				$this-&gt;__construct5($args[0],$args[1],$args[2],$args[3],$args[4]);
				break;
		}
	}
	*/ 
		

	/**
	 * Constructeur de la classe qui prends 1 argument
	 * @param $news une instance de news
	*/
	function __construct(array $news) {
		$this->id = $news[0];
		$this->titre = $news[1];
		$this->idMembre = $news[2];
		$this->dateNews = $news[3];
		$this->contenu = $news[4];
		return $this;
	}

	/**
	 * Constructeur de la classe qui prends 3 argument
	 * @param $nom le nom de l'auteur
	 * @param $dateNews la date de publication
	 * @param $contenu le contenu de la news
	function __construct5(int $id, string $titre, int $idMembre, string $dateNews, string $contenu) {
		$this->id = $id;
		$this->titre = $titre;
		$this->idMembre = $idMembre;
		$this->dateNews = $dateNews;
		$this->contenu = $contenu;
		return $this;
	}
	*/
	


//getter

	public function getId():int{
		return $this->id;
	}

	public function getTitre(): string{
		return $this->titre;
	}

	public function getIdMembre():int{
		return $this->idMembre;
	}

	public function getDate(): string{
		return $this->dateNews;
	}

	public function getContenu(): string{
		return $this->contenu;
	}


//setter

	public function setId(int $id){
		$this->id = $id;
	}


	public function setTitre(string $titre){
		$this->titre = $titre;
	}

	public function setIdMembre(int $idMembre){
		$this->idMembre = $idMembre;
	}


	public function setDate(string $dateNews){
		$this->dateNews = $dateNews;
	}

	public function setContenu(string $contenu){
		$this->contenu = $contenu;
	}


//méthode toString()

	public function toString() : string {
		return $this->titre." ".$this->dateNews." ".$this->contenu." ".$this->idMembre;
	}


}

?>
