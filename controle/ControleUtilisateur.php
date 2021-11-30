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
			$dVueEreur = array();

			// on récupère l'action dans l'URL
			if (isset($_GET["action"])) $action = $_GET["action"];
								else 	$action = NULL;

			switch ($action) {
				case NULL:
					// action
					require($rep.$vues["pagePrincipale"]);
					break;

				case "page":
					// on appelle les bonnes pages
					break;

				case "inscription":
					// on redirige vers la page d'inscription
					require($rep.$vues["inscription"]);
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
			$dVueEreur[] =	"Erreur inattendue!!! ";
			require ($rep.$vues['erreur']);
		}
		catch (Exception $e)
		{
			//echo $e->getMessage();
			$dVueEreur[] =	"Erreur inattendue!!! ";
			require ($rep.$vues['erreur']);
		}
	}
}

?>