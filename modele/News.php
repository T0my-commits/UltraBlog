<?php

class News {
	private string $nom;
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
			
			case 3:
				$this-&gt;__construct3($args[0],$args[1],$args[2]);
				break;
		}
	}

	/**
	 * Constructeur de la classe qui prends 1 argument
	 * @param $news une instance de news
	*/
	function __construct1(News $news) {
		this = $news;
		return this;
	}

	/**
	 * Constructeur de la classe qui prends 3 argument
	 * @param $nom le nom de l'auteur
	 * @param $dateNews la date de publication
	 * @param $contenu le contenu de la news
	*/
	function __construct3(string $nom, string $dateNews, string $contenu) {
		this->nom = $nom;
		this->dateNews = $dateNews;
		this->contenu = $contenu;
		return this;
	}
}

?>