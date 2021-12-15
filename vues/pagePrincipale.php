<?php

require("recurrent/header.php");

?>

<body style="background-color: #cdd9e8;">


<div class="container-xxl my-5">
	<div class="gy-5 col-8 align-self-center mx-auto">

		<div>
			<h1 class="fs-1 fw-bold white"><?php if ($admin != NULL) echo "Bonjour " . $admin->GetLogin();
			                                     else echo "UltraBlog"; ?></h1>
			
			<?php if ($admin != NULL) { ?>
			<div class="mb-3">
			<form action="index.php?action=addNews" method="POST">
			  <label for="exampleFormControlTextarea1" class="form-label">Poster une news</label>
			  <textarea class="form-control shadow-sm" name="ftitre" id="ftitre" rows="1" placeholder="Rentrez le titre de votre article"></textarea>
			  <textarea class="form-control shadow-sm" name="fcontenu" id="fcontenu" rows="6" placeholder="Rédigez votre article ici"></textarea>
			<input type="hidden" name="idMembre" value="<?php echo $admin->getIdMembre(); ?>">
			
				<input type="submit" class="btn btn-primary my-2" value="Je poste !"/>
			</form>
			</div>
			<?php } ?>
		</div>


		<?php  foreach ($tabNews as $news) { ?>
		<div class="card mb-3 bg-white-translucent rounded-stg shadow" aria-live="assertive" aria-atomic="true">

		  <div class="card-body">
		    <p> <?= $news->getDate() ?> </p>
		    <h3 class="card-title"><?= $news->getId()?> <?= $news->getTitre() ?> <!--<span class="badge bg-secondary">New</span>--></h3>
		    <p class="card-text"><?= $news->getContenu() ?></p>
		    <a href="index.php?action=afficherNews&idnews=<?= $news->getId() ?> " class="btn btn-primary rounded-stg">Lire l'article</a>
		    
		    <?php if ($admin!=NULL && $admin->getIdMembre()== $news->getIdMembre()) {
		    	// si l'utilisateur est connecté, on affiche ce bouton ?>

			<a href="index.php?action=deletenews&idNews=<?php echo $news->getId()?>&idMembre=<?php echo $news->getIdMembre()?> " class="btn btn-outline-danger rounded-stg"> Effacer la news </a>
		    <?php } ?>

		  </div>
		</div>
		<?php } ?>
	</div>

	<nav aria-label="Page navigation example">
	  <ul class="pagination justify-content-center">
	    <li class="page-item <?php if ($page <= 1) echo "disabled" ?>">
	    	<!-- il faut vérifier si la page précédent existe avec un if dans la class de a.
	    	Si la page n'existe pas, alors on echo disabled dans l'attribut class -->
	      <a class="page-link" href="index.php?page=<?= ($page-1) ?><?php if (isset($dateNews)) echo '&rechercheDate='.$dateNews; ?>" aria-label="Previous">
	        <span aria-hidden="true">&laquo;</span>
	      </a>
	    </li>
	    <?php for($i=1 ; $i<=$nbPagesTotal ; $i++) { ?>
		    <li class="page-item <?php if ($page == ($i)) echo "active" ?>"><a class="page-link" href="index.php?page=<?= ($i) ?>"><?= ($i) ?></a></li>
		<?php } ?>
	    <li class="page-item <?php if ($page >= $nbPagesTotal) echo "disabled"; ?>">
	      <a class="page-link" href="index.php?page=<?= ($page+1) ?><?php if (isset($dateNews)) echo '&rechercheDate='.$dateNews; ?>" aria-label="Next">
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
