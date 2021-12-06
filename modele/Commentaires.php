<?php

class Commentaires {
	
	private $id;
	private $login;
	private $idNews;
	private $contenu;

	/*function __construct() {
		$ctp = func_num_args();
		$args = func_get_args();

		switch ($ctp) {
			case 1:
				$this-&gt;__construct1($args[0]);
				break;
			
			case 4:
				$this-&gt;__construct3($args[0],$args[1],$args[2],$args[3]);
				break;
		}
	}*/

	function __construct(array $com) {
		$this->id = $com[0];
		$this->login = $com[1];
		$this->idNews = $com[2];
		$this->contenu = $com[3];
		return $this;
	}

	/*function __construct4(int $id, string $login, int $idNews, string $contenu){
		$this->id = $id;
		$this->login = $login;
		$this->idNews = $idNews;
		$this->contenu = $contenu;
		return $this;
	}*/


//getter

	public function getId():int{
		return $this->id;
	}

	public function getLogin():string{
		return $this->login;
	}

	public function getIdNews():int{
		return $this->idNews;
	}

	public function getContenu(): string{
		return $this->contenu;
	}


//setter

	public function setId(int $id){
		$this->id = $id;
	}

	public function setLogin(string $login){
		$this->login = $login;
	}

	public function setIdNews(int $idNews){
		$this->idNews = $idNews;
	}

	public function setContenu(string $contenu){
		$this->contenu = $contenu;
	}



//méthode toString()
	public function toString() : string {
		return $this->login." ".$this->contenu;
	}

}

?>
