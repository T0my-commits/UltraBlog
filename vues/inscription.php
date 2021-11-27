
<!--
<form action="verificationI.php" method="GET">

	<p>
	<label for="nom"> Nom: </label>
	<INPUT TYPE=TEXT id="nom" NAME="nom"/>
	</p>
	</br>

	<p>
	<label for="prenom"> Prénom: </label>
	<INPUT TYPE=TEXT id="prenom" NAME="prenom"/>
	</p>
	</br>


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
-->

<?php

require("recurrent/header.php");

?>

<div class="container-xxl my-5">
	<div class="col-4 align-self-center mx-auto">
		<h1 class="fs-3 my-4 fw-bold">Inscription</h1>
		<form>
		  <div class="mb-3">
		    <label for="exampleInputEmail1" class="form-label">Adresse mail</label>
		    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
		    <div id="emailHelp" class="form-text">Nous ne partagerons jamais votre adresse mail avec quelqu'un d'autre.</div>
		  </div>
		  <div class="mb-3">
		    <label for="fnom" class="form-label">Votre nom</label>
		    <input type="text" class="form-control" id="fnom" required>
		  </div>
		  <div class="mb-3">
		    <label for="fprenom" class="form-label">Votre prénom</label>
		    <input type="text" class="form-control" id="fprenom" required>
		  </div>
		  <div class="mb-3">
		    <label for="ftel" class="form-label">Votre téléphone</label>
		    <input type="phone" class="form-control" id="ftel" required>
		  </div>
		  <div class="mb-3">
		    <label for="fmdp" class="form-label">Mot de passe</label>
		    <input type="password" class="form-control" id="fmdp" required>
		  </div>
		  <!--<div class="mb-3 form-check">
		    <input type="checkbox" class="form-check-input" id="exampleCheck1">
		    <label class="form-check-label" for="exampleCheck1">Check me out</label>
		  </div>-->
		  <button type="submit" class="btn btn-primary my-3">Submit</button>
		</form>
	</div>
</div>

<?php

require("recurrent/footer.php");

?>