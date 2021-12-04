<?php

require("recurrent/header.php");

?>

<body style="background-color: #cdd9e8;">


<!--<?php $id=$new->getId() ?>-->
<div class="container-xxl my-5">
<!--<h1>bonjour </h1>-->
	<div class="gy-5 col-8 align-self-center mx-auto">

		<a href="../index.php" class="btn btn-secondary"> Retour aux news</a>

		<div>
			<h1 class="fs-1 fw-bold white my-5"><?= $news->getTitre() ?></h1>
		</div>


		<div class="card mb-3 bg-white-translucent rounded-stg shadow" aria-live="assertive" aria-atomic="true">
		  <div class="card-body">
		    <p class="card-text"><?= $news->getContenu() ?></p>
		    <!--<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>-->
		    <?php if (true) {
		    	// si l'utilisateur est connecté, on affiche ce bouton ?>
		    	<button type="button" class="btn btn-outline-danger rounded-stg">Effacer news</button>
		    <?php } ?>

		  </div>
		</div>

		<a href="../index.php?ajouterCommentaire=1" class="btn btn-primary my-3">Poster un commentaire !</a>

		<?php  foreach ($tabCommentaires as $commentaire) { ?>
		<div class="container my-2">
			<h4><?= $commentaire->getLogin() ?></h4>
			<p><?= $commentaire->getContenu() ?></p>
		</div>
		<?php } ?>


	</div>

</div>
</body>

<?php

require("recurrent/footer.php");

?>
