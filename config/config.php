<?php

// gen

$rep = __DIR__."/../";

// errors

//on initialise un tableau d'erreur
$dVueErreur = array();

// BD

$dsn = "mysql:host=berlin.iut.local;dbname=dbmaorillon";
$username = "maorillon"; // à changer avant la publication du site !!! Dangereux !!!
$password = "achanger"; // ça aussi !!! Dangereux !!!

// Vues

$vues["erreur"] = "vues/erreur.php";
$vues["connexion"] = "vues/connexion.php";
$vues["inscription"] = "vues/inscription.php";
$vues["pagePrincipale"] = "vues/pagePrincipale.php";
$vues["pageAfficherVue"] = "vues/PageAfficherNews.php";
$vues["pageAjoutCommentaire"] = "vues/PageAjoutCommentaire.php";
$vues["pageNewsByAdmin"]= "vues/PageAfficherNewsAdmin.php";

?>
