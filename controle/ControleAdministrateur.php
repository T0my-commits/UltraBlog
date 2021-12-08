<?php

class ControleAdministrateur extends ControleUtilisateur {

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
			global $rep, $vues, $dVueErreur;

			// on récupère l'action dans l'URL
			if (isset($_GET["action"])) $action = $_GET["action"];
								else 	$action = NULL;

			switch ($action) {
				case "addnews":
					// on redirige vers la page d'ajout de news
					break;

				case "deconnexion":
					// on déconnecte l'administrateur;
					$this->Deconnexion();

				default:
					// on renvoie le constructeur de ControleUtilisateur;
					parent::__construct();
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
	 * Méthode qui déconnecte un membre
	*/
	function Deconnexion() {
		global $rep, $vues, $dVueErreur;
		session_unset();
		session_destroy();
		$_SESSION = array();
	}

	/*function AjouterNews(int $idMembre, string $titre, string $contenu){
		global $rep, $vues;
		$idMembre = $_GET['idMembre'];
		$titre = $_POST['$ftitre'];
		$contenu = $_POST['$fcontenu'];
		Validation::ValiderAjoutNews($idMembre, $titre, $contenu);
		$model = new ModeleNews();
		$news= $model->AjoutNews($idMembre, $titre, $contenu);

		require($rep.$vues['pagePrincipale']);


	}*/
}

?>
