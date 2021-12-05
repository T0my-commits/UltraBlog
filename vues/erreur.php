<!DOCTYPE html>
<html lang="fr">
<body>
<h1>/!\ ERREUR /!\</h1>

<meta charset="utf-8" />
        <title>Titre</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </head>

	<div class="card mb-3">
		<!-- <img src="../media/cbd.jpeg" class="card-img-top" alt="..."> -->
		<div class="card-body">
			<h3 class="card-title">/!\ Erreur /!\</h3>
			<p class="card-text">Message de l'erreur</p>
			<p class="card-text"><small class="text-muted"></small></p>
				<a href="index.php" class="btn btn-primary">Retour à la page principale</a>
		</div>
	</div>


<?php

	foreach($dVueErreur as $erreur){
		echo"</br>".$erreur;
	}	

?>


