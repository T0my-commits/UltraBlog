<?php

class FrontControler {


	function __construct()
	{
		try
		{
			// on importe les variables globales;
			global $rep, $vues;

			//on initialise un tableau d'erreur
			$dVueEreur = array();

			// on répertorie les actions admin;
			$listeActions_Admin = array("deconnecter", "supprimer", "ajouterNews");

			// on vérifie si l'utilisateur est connecté;
			$admin = ModeleAdministrateur::isConnect();

			// on récupère l'action dans l'URL
			if (isset($_GET["action"])) $action = $_GET["action"];
								   else	$action = NULL;
			
			// si l'utilisateur est admin, on charge le controle administrateur;
			if (in_array($action, $listeActions_Admin))
			{
				if ($admin == NULL) require($rep.$vues["connexion"]);
				else $cont = new ControleAdministrateur();
			}
			else
				$cont = new ControleUtilisateur();
		}
		catch (Exception $e)
		{
			$dVueEreur[] =	"Erreur inattendue (FrontController)!!! ";
			require ($rep.$vues['erreur']);
		}
	}
	

}

?>