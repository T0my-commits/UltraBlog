<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>UltraBlog</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
		<style>
			.bg-white-translucent
			{
				background: rgba(255, 255, 255, 0.9);
			}

			.rounded-stg
			{
				border-radius: 25px !important;
			}
		</style>
    </head>

	<?php

	//require("vues/pagePrincipale.php");
	//require("vues/inscription.php");
	//require("vues/connexion.php");

	//chargement config
	require_once(__DIR__.'/config/config.php');

	//chargement autoloader pour autochargement des classes
	require_once(__DIR__.'/config/Autoload.php');
	Autoload::charger();

	$cont = new ControleUtilisateur();
	
	?>

</html>
