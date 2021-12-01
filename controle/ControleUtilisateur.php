<?php

class ControleUtilisateur {

	/**
	 * Constructeur de la classe
	*/
	function __construct() {
		try
		{
			/* On veut gérer les actions suivantes :
			 *   - affichage de la page et systeme de pagination
			 *   - addnews (l'administrateur veut ajouter une news)
			 *   - inscription
			 *   - connexion
			 * 
			 * Ces actions sont passées dans l'URL via une méthode GET.
			 * Lorsque que nous traiterons de données plus confidentielles, nous communiquerons ces données
			 * via une méthode POST (exemple : login, mot de passe)
			*/

			// nécessaire pour utiliser variables globales:
			global $rep, $vues;

			//on initialise un tableau d'erreur
			$dVueErreur = array();

			// on récupère l'action dans l'URL
			if (isset($_GET["action"])) $action = $_GET["action"];
								else 	$action = NULL;

			switch ($action) {
				case NULL:
					// on liste les news
					$this->ListerNews();
					break;

				case "inscription":
					// on redirige vers la page d'inscription
					require($rep.$vues["inscription"]);
					break;

				case "afficherNews":
					// on affiche la news;
					$this->AfficherNews($id);
					require("vues/PageAfficherNews.php");
					break;

				case "ajouterCommentaire":
					require("vues/PageAjoutCommentaire.php");
					break;

				default:
					// page erreur;
					break;
			}
		}
		catch (PDOException $e)
		{
			//echo $e->getMessage();
			//si erreur BD, pas le cas ici
			$dVueErreur[] =	"Erreur inattendue!!! ";
			require ($rep.$vues['erreur']);
		}
		catch (Exception $e)
		{
			//echo $e->getMessage();
			$dVueErreur[] =	"Erreur inattendue!!! ";
			require ($rep.$vues['erreur']);
		}
	}

	/**
	 * Méthode qui permet d'afficher les news sur la page principale
	*/
	function ListerNews() : void {
		global $rep, $vues;

		// on défini le nombre de news par page;
		$NB_NEWS_PAR_PAGE = 4;

		// on défini le numéro de page demandé;
		if (isset($_GET["page"])) 	$page = $_GET["page"];
		else 						$page = 1;

		// on récupère les news de cette page;
		$val = Validation::ValiderPage($page);
		$model = new ModeleNews();
		$tabNews = $model->GetNewsPage($page, $NB_NEWS_PAR_PAGE);

		$nbNewsTotal = $model->CountAllNews();
		$nbPagesTotal = ceil($nbNewsTotal / $NB_NEWS_PAR_PAGE);

		// puis on affiche la page avec les nouvelles infos;
		require($rep.$vues["pagePrincipale"]);
	}

	/*function AfficherNews(int $id):void{
		global $rep, $vues;
		$val = Validation::ValidInscription();




		require($rep.$vue["pageVue"]);
	}*/
}

?>









