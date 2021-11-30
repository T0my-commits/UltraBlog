<?php

  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `idMembre` int(255) NOT NULL,
  `dateNews` date NOT NULL,
  `contenu` varchar(10000) NOT NULL


class News {
	private int $id;
	private string $titre;
	private int $idMembre;
	private string $dateNews;
	private string $contenu;

	/**
	 * Surcharge du constructeur de la classe.
	*/ 
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

	/**
	 * Constructeur de la classe qui prends 1 argument
	 * @param $news une instance de news
	*/
	function __construct1(News $news) {
		$this = $news;
		return this;
	}

	/**
	 * Constructeur de la classe qui prends 3 argument
	 * @param $nom le nom de l'auteur
	 * @param $dateNews la date de publication
	 * @param $contenu le contenu de la news
	*/
	function __construct5(int $id, string $titre, int $idMembre, string $dateNews, string $contenu) {
		$this->id=$id;
		$this->titre=$titre;
		$this->idMembre = $idMembre;
		$this->dateNews = $dateNews;
		$this->contenu = $contenu;
		return $this;
	}


//getter

	public function getId():int{
		return $id;
	}

	public function getTitre(): string{
		return $titre;
	}

	public function getIdMembre():int{
		return $idMembre;
	}

	public function getDate(): string{
		return $dateNews;
	}

	public function getContenu(): string{
		return $contenu;
	}


//setter

	public function setId(int $id){
		$this->id=$id;
	}


	public function setTitre(string $titre){
		$this->titre = $titre;
	}

	public function setIdMembre(int $idMembre){
		$this->idMembre;
	}


	public function setDate(string $dateNews){
		$this->dateNews=$dateNews;
	}

	public function setContenu(string $contenu){
		$this->contenu=$contenu;
	}


//méthode toString()

	public function toString() : string {
		return $this->titre." ".$this->dateNews." ".$this->contenu." ".$this->idMembre;
	}


}

?>
