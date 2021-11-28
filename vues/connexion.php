<!--
<link 	href="styleBlog.css"type="text/css" rel="stylesheet"media="screen"/>
<form action="verificationC.php" method="GET">
	<p>
	<label for="login"> Login: </label>
	<INPUT TYPE=TEXT id="login" NAME="login"/>
	</p>
	</br>

	<p>
	<label for="mdp"> Mot de passe: </label>
	<INPUT TYPE=TEXT id="mdp" NAME="mdp"/>
	</p>
	</br>

	<INPUT TYPE="submit" VALUE="Valider"/>
	</form>

	<a href="inscription.php"> Inscrivez-vous! </a>
-->

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