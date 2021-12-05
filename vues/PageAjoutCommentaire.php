<?php

require("recurrent/header.php");

?>

<div class="container-xxl my-5">
	<div class="col-4 align-self-center mx-auto">
		<h1 class="fs-3 my-4 fw-bold">Ajouter un commentaire</h1>
		<form action="../index.php?action=ajouterCommentaire" method="POST">
		  <div class="mb-3">
		    <label for="flogin" class="form-label">Login</label>
		    <input type="text" class="form-control" id="flogin" name="flogin" value="<?= $slogin ?>" required>
		  </div>
		  <label for="zoneTexteCommentaire" class="form-label">Votre commentaire</label>
			  <textarea class="form-control shadow-sm rounded-stg" id="zoneTexteCommentaire" rows="6" placeholder="Rédigez votre commentaire ici" name="fcommentaire" type="text" required></textarea>
			  <input type="hidden" name="idNews" value="<?= $idNews ?>">
		  <button type="submit" class="btn btn-primary my-3">Poster !</button>
		</form>
	</div>
</div>

<?php

require("recurrent/footer.php");

?>