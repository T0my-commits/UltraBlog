<?php

require("recurrent/header.php");

?>

<div class="container-xxl my-5">
	<div class="col-4 align-self-center mx-auto">
		<h1 class="fs-3 my-4 fw-bold">Inscription</h1>
		<form action="index.php?action=validInscription" method="POST">
		  <div class="mb-3">
		    <label for="fnom" class="form-label">Votre nom</label>
		    <input type="text" class="form-control" id="fnom" name="fnom" required>
		    <div id="emailHelp" class="form-text">Nous ne partagerons jamais vos informations personnelles avec quelqu'un d'autre sans votre accord.</div>
		  </div>
		  <div class="mb-3">
		    <label for="fprenom" class="form-label">Votre prénom</label>
		    <input type="text" class="form-control" id="fprenom" name="fprenom" required>
		  </div>
		  <div class="mb-3">
		    <label for="flogin" class="form-label">Votre login</label>
		    <input type="text" class="form-control" id="flogin" name="flogin" required>
		  </div>
		  <div class="mb-3">
		    <label for="fmdp" class="form-label">Mot de passe</label>
		    <input type="password" class="form-control" id="fmdp" name="fmotdepasse" required>
		  </div>
		  <button type="submit" class="btn btn-primary my-3">S'inscrire</button>
		</form>
	</div>
</div>

<?php

require("recurrent/footer.php");

?>