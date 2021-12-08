<?php

require("recurrent/header.php");

?>

<div class="container-xxl my-5">
	<div class="col-4 align-self-center mx-auto">
		<h1 class="fs-3 my-4 fw-bold">Inscription</h1>
		<form>
		  <div class="mb-3">
		    <label for="fnom" class="form-label">Votre nom</label>
		    <input type="text" class="form-control" id="fnom" required>
		    <div id="emailHelp" class="form-text">Nous ne partagerons jamais vos informations personnelles avec quelqu'un d'autre sans votre accord.</div>
		  </div>
		  <div class="mb-3">
		    <label for="fprenom" class="form-label">Votre prénom</label>
		    <input type="text" class="form-control" id="fprenom" required>
		  </div>
		  <div class="mb-3">
		    <label for="flogin" class="form-label">Votre login</label>
		    <input type="text" class="form-control" id="flogin" required>
		  </div>
		  <div class="mb-3">
		    <label for="fmdp" class="form-label">Mot de passe</label>
		    <input type="password" class="form-control" id="fmdp" required>
		  </div>
		  <!--<div class="mb-3 form-check">
		    <input type="checkbox" class="form-check-input" id="exampleCheck1">
		    <label class="form-check-label" for="exampleCheck1">Check me out</label>
		  </div>-->
		  <button type="submit" class="btn btn-primary my-3">S'inscrire</button>
		</form>
	</div>
</div>

<?php

require("recurrent/footer.php");

?>