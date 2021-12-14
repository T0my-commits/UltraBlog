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
				case "addNews":
					// on redirige vers la page d'ajout de news
					$this->AddNews();
					break;

				case "deconnexion":
					// on déconnecte l'administrateur;
					$this->Deconnexion();
					break;

				case "deletenews":
					//permet à l'admin d'ajouter une news
					$this->DeleteNews();
					break;

				default:
					// on renvoie le constructeur de ControleUtilisateur;
					parent::__construct();
					break;
			}
		}
		catch (PDOException $e)
		{
			$dVueErreur[] = $e;
			require ($rep.$vues['erreur']);
		}
		catch (Exception $e)
		{
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

		// on affiche la page d'acceuil;
		header("Location: index.php");
	}

	function AddNews() : void{
		global $rep, $vues, $dVueErreur;
		
		echo $_POST['idMembre'];
		$idMembre = (int) $_POST['idMembre'];
		$titre = $_POST['ftitre'];
		$contenu = $_POST['fcontenu'];
		Validation::Valider_INT($idMembre);
		Validation::Valider_STR($titre);
		Validation::Valider_STR($contenu);
		
		ModeleAdministrateur::AjoutNews($idMembre, $titre, $contenu);
		
		//require($rep.$vues['pagePrincipale']);
		header("Location: index.php");
	}

	function DeleteNews() : void{
		global $rep, $vues, $dVueErreur;
		$idMembre = (int) $_GET['idMembre'];
		$idNews = (int) $_GET['idNews'];
		Validation::Valider_INT($idMembre);
		Validation::Valider_INT($idNews);
		ModeleAdministrateur::SupprimerNews($idNews, $idMembre);
		header("Location: index.php");		

	}

}

?>



