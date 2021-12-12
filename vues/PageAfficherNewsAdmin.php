<?php

require("recurrent/header.php");

?>

<body style="background-color: #cdd9e8;">


		<?php  foreach ($tabNews as $news) { ?>
		<div class="card mb-3 bg-white-translucent rounded-stg shadow" aria-live="assertive" aria-atomic="true">
		  <!-- <img src="../media/cbd.jpeg" class="card-img-top" alt="..."> -->
		  <div class="card-body">
		    <h3 class="card-title"><?= $news->getTitre() ?> <!--<span class="badge bg-secondary">New</span>--></h3>
		    <p class="card-text"><?= $news->getContenu() ?></p>
		    <!--<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>-->
		    <a href="index.php?action=afficherNewsAdmin&login=<?= $admin ->getLogin() ?> " class="btn btn-primary rounded-stg">Lire l'article</a>
		    <?php if ($admin!=NULL) {
		    	// si l'utilisateur est connecté, on affiche ce bouton ?>
		    	<button type="button" class="btn btn-outline-danger rounded-stg">Effacer news</button>
		    <?php } ?>

		  </div>
		</div>
		<?php } ?>
	</div>

	<nav aria-label="Page navigation example">
	  <ul class="pagination justify-content-center">
	    <li class="page-item <?php if (($page-1) < $nbPagesTotal) echo "disabled" ?>">
	    	<!-- il faut vérifier si la page précédent existe avec un if dans la class de a.
	    	Si la page n'existe pas, alors on echo disabled dans l'attribut class -->
	      <a class="page-link" href="index.php?page=<?= ($page-1) ?>" aria-label="Previous">
	        <span aria-hidden="true">&laquo;</span>
	      </a>
	    </li>
	    <?php for($i=0 ; $i<=$nbPagesTotal ; $i++) { ?>
		    <li class="page-item <?php if ($page == ($i+1)) echo "active" ?>"><a class="page-link" href="index.php?page=<?= ($i+1) ?>"><?= ($i+1) ?></a></li>
		<?php } ?>
	    <li class="page-item <?php if ($page > $nbPagesTotal) echo "disabled"; ?>">
	      <a class="page-link" href="index.php?page=<?= ($page+1) ?>" aria-label="Next">
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
