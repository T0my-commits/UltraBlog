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
					// on affiche la news et ces commentaires;
					$this->AfficherNews($dVueErreur);
					break;

				case "ajouterCommentaire":
					// on affiche la page d'ajout de commentaire ou on ajoute un commentaire;
					$this->AjouterCommentaire($dVueErreur);
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
		if (isset($_GET["page"])) 	
			$page = $_GET["page"];
		else 						
			$page = 1;

		// on récupère les news de cette page;
		Validation::ValiderPage($page);
		$model = new ModeleNews();
		$tabNews = $model->GetNewsPage($page, $NB_NEWS_PAR_PAGE);

		$nbNewsTotal = $model->CountAllNews();
		$nbPagesTotal = ceil($nbNewsTotal / $NB_NEWS_PAR_PAGE);

		// puis on affiche la page avec les nouvelles infos;
		require($rep.$vues['pagePrincipale']);
	}

	/**
	 * Méthode qui permet d'afficher une news et ces commentaires
	*/
	function AfficherNews(array &$dVueErreur) : void {

		global $rep, $vues;
		$idnews=$_GET['idnews'];
		Validation::Valider_INT($idnews, $dVueErreur);
		$model = new ModeleNews();
		$news = $model->GetNews($idnews);

		$tabCommentaires = $model->GetCom($idnews);

		require('vues/PageAfficherNews.php');
	}

	/**
	 * Méthode qui permet d'afficher la page d'ajout de commentaire et d'en
	 * ajouter un
	*/
	function AjouterCommentaire(array &$dVueErreur) : void {

		global $rep, $vues;

		// si les champs sont déjà remplis, alors l'utilisateur veut poster un message...
		if (isset($_POST['flogin']) && isset($_POST['fcommentaire']))
		{
			// on fais le traitement necessaire
			$login = $_POST['flogin'];
			$commentaire = $_POST['fcommentaire'];
			$idNews = $_POST['idNews'];

			Validation::Valider_STR($login, $dVueErreur);
			Validation::Valider_STR($commentaire, $dVueErreur);
			Validation::Valider_INT($idNews, $dVueErreur);

			$model = new ModeleNews();
			$model->AddCommentaire($login, $commentaire, $idNews);

			header("Location: index.php?action=afficherNews&idnews=".$idNews);

		}
		else {
			// ...sinon on affiche la vue d'ajout de commentaires
			$idNews = $_GET['idnews'];
			Validation::Valider_INT($idNews, $dVueErreur);
			require($rep.$vues["pageAjoutCommentaire"]);
		}
		
	}

}

?>









