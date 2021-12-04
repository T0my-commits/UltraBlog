<?php

// gen
$rep = __DIR__."/../";

// BD

$dsn = "mysql:host=berlin.iut.local;dbname=dbmaorillon";
$username = "maorillon"; // à changer avant la publication du site !!! Dangereux !!!
$password = "achanger"; // ça aussi !!! Dangereux !!!

// Vues

$vues["erreur"] = "vues/erreur.php";
$vues["connexion"] = "vues/connexion.php";
$vues["inscription"] = "vues/inscription.php";
$vues["pagePrincipale"] = "vues/pagePrincipale.php";
$vues["pageVue"] = "vues/PageAfficherNews.php";
$vues["pageCom"] = "vues/PageAjoutCommentaire.php";

?>
