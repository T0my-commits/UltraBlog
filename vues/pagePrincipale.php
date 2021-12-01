<?php

require("recurrent/header.php");

?>

<body style="background-color: #cdd9e8;">


<div class="container-xxl my-5">
	<div class="gy-5 col-8 align-self-center mx-auto">

		<div>
			<h1 class="fs-1 fw-bold white">UltraBlog</h1>
			<!--
			<button type="button" class="btn btn-primary">Ajouter une news</button>
			<button type="button" class="btn btn-secondary btn-md">Voir mes news sur cette page</button>
			-->
			
			<div class="mb-3">
			  <label for="exampleFormControlTextarea1" class="form-label">Poster une news</label>
			  <textarea class="form-control shadow-sm" id="exampleFormControlTextarea1" rows="6" placeholder="Rédigez votre article ici"></textarea>
				<button type="button" class="btn btn-primary my-2">Je poste !</button>
			</div>
		</div>


		<?php 
		if(isset($tabNews)){
			foreach ($tabNews as $news) { ?>
		<div class="card mb-3 bg-white-translucent rounded-stg shadow" aria-live="assertive" aria-atomic="true">
		  <!-- <img src="../media/cbd.jpeg" class="card-img-top" alt="..."> -->
		  <div class="card-body">
		    <h3 class="card-title"><?= $news->titre ?> <!--<span class="badge bg-secondary">New</span>--></h3>
		    <p class="card-text"><?= $news->contenu ?></p>
		    <!--<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>-->
		    <a href="../index.php?action=afficherNews&idNews=<?= $news->$id ?>" class="btn btn-primary rounded-stg">Lire l'article</a>
		    <?php if (true) {
		    	// si l'utilisateur est connecté, on affiche ce bouton ?>
		    	<button type="button" class="btn btn-outline-danger rounded-stg">Effacer news</button>
		    <?php } ?>

		  </div>
		</div>
			<?php } ?>
		<?php } ?>
	</div>

	<nav aria-label="Page navigation example">
	  <ul class="pagination justify-content-center">
	    <li class="page-item">
	    	<!-- il faut vérifier si la page précédent existe avec un if dans la class de a.
	    	Si la page n'existe pas, alors on echo disabled dans l'attribut class -->
	      <a class="page-link" href="../index.php?page=<?= ($page-1) ?>" aria-label="Previous">
	        <span aria-hidden="true">&laquo;</span>
	      </a>
	    </li>
	    <?php 
		if(isset($nbPagesTotal)){
			for($i=0 ; $i<$nbPagesTotal ; $i++) { ?>
		    <li class="page-item <?php if ($page == $i) echo "active" ?>"><a class="page-link" href="#"><?= $i ?></a></li>
			<?php } ?>
		<?php } ?>
	    <li class="page-item">
	    	<!-- il faut vérifier si la page suivant existe avec un if dans la class de a.
	    	Si la page n'existe pas, alors on echo disabled dans l'attribut class -->
	      <a class="page-link" href="../index.php?page=<?= ($page+1) ?>" aria-label="Next">
	        <span aria-hidden="true">&raquo;</span>
	      </a>
	    </li>
	  </ul>
	</nav>

</div>
</body>

<?php

require("recurrent/footer.php");

?>
