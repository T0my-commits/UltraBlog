<?php

require("recurrent/header.php");

?>

<body style="background-color: #cdd9e8;">


<div class="container-xxl my-5">
	<div class="gy-5 col-8 align-self-center mx-auto">

		<a href="index.php" class="btn btn-secondary"> Retour aux news</a>

		<div>
			<h1 class="fs-1 fw-bold white my-5"><?= $news->GetTitre() ?></h1>
		</div>


		<div class="card mb-3 bg-white-translucent rounded-stg shadow" aria-live="assertive" aria-atomic="true">
		  <div class="card-body">
		    <p class="card-text"><?= $news->GetContenu() ?></p>
		    <!--<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>-->
		    <?php if (true){
		    	// si l'utilisateur est connecté, on affiche ce bouton ?>
		    	<button type="button" class="btn btn-outline-danger rounded-stg">Effacer news</button>
		    <?php } ?>

		  </div>
		</div>
		
		<p> <?php echo $nbCom ?> commentaire(s)</p>

		<a href="index.php?action=ajouterCommentaire&idnews=<?= $news->GetId() ?>" class="btn btn-primary my-3">Poster un commentaire !</a>

		<?php  foreach ($tabCommentaires as $commentaire) { ?>
		<div style="background-color:#AAAAB8" class="card mb-3 bg-white-translucent rounded-stg shadow" >
			<div class="card-body">
				<h5 style="color:black"><?= $commentaire->GetLogin() ?></h5>
				<p class="card-text"><?= $commentaire->GetContenu() ?></p>
			</div>
		</div>
		<?php } ?>


	</div>

</div>
</body>

<?php

require("recurrent/footer.php");

?>
