<?php

require("recurrent/header.php");

?>

<div class="container-xxl my-5">
	<div class="col-4 align-self-center mx-auto">
		<h1 class="fs-3 my-4 fw-bold">Connexion</h1>
		<form action="../index.php?action=validConnexion" method="POST">
		  <div class="mb-3">
		    <label for="flogin" class="form-label">Login</label>
		    <input type="text" class="form-control" id="flogin" name="flogin" required>
		  </div>
		  <div class="mb-3">
		    <label for="fmotdepasse" class="form-label">Mot de passe</label>
		    <input type="password" class="form-control" id="fmotdepasse" name="fmotdepasse" required>
		  </div>
		  <button type="submit" class="btn btn-primary my-3">Se connecter</button>
		</form>
	</div>
</div>

<?php

require("recurrent/footer.php");

?>