<?php

// gen
$rep = __DIR__."/../";

// BD

$dsn = "mysql:host=localhost;dbname=youpi";
$username = "root"; // à changer avant la publication du site !!! Dangereux !!!
$password = ""; // ça aussi !!! Dangereux !!!

// Vues

$vues["erreur"] = "vues/erreur.php";
$vues["connexion"] = "vues/connexion.php";
$vues["inscription"] = "vues/inscription.php";
$vues["pagePrincipale"] = "vues/pagePrincipale.php";

?>