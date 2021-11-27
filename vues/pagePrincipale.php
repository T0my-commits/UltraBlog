<?php

require("recurrent/header.php");

?>

<body style="background-color: #a1c2ff;">


<div class="container-xxl my-5">
	<div class="gy-5 col-8 align-self-center mx-auto">

		<div>
			<h1 class="fs-1 fw-bold">UltraBlog</h1>
			<!--
			<button type="button" class="btn btn-primary">Ajouter une news</button>
			<button type="button" class="btn btn-secondary btn-md">Voir mes news sur cette page</button>
			-->
			
			<div class="mb-3">
			  <label for="exampleFormControlTextarea1" class="form-label">Poster une news</label>
			  <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" placeholder="Rédigez votre article ici"></textarea>
				<button type="button" class="btn btn-primary my-2">Je poste !</button>
			</div>
		</div>


		<div class="card mb-3">
		  <!-- <img src="../media/cbd.jpeg" class="card-img-top" alt="..."> -->
		  <div class="card-body">
		    <h3 class="card-title">Les effets secondaires du CBD sur la santé <span class="badge bg-secondary">New</span></h3>
		    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
		    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
		    <a href="#" class="btn btn-primary">Lire l'article</a>
		    <button type="button" class="btn btn-outline-danger">Effacer news</button>
		  </div>
		</div>
		<div class="card mb-3">
		  <!-- <img src="../media/cbd.jpeg" class="card-img-top" alt="..."> -->
		  <div class="card-body">
		    <h3 class="card-title">Pourquoi les bébés pleuvent-ils ? <span class="badge bg-secondary">New</span></h3>
		    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
		    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
		    <a href="#" class="btn btn-primary">Lire l'article</a>
		    <button type="button" class="btn btn-outline-danger">Effacer news</button>
		  </div>
		</div>
		<div class="card mb-3">
		  <!-- <img src="../media/cbd.jpeg" class="card-img-top" alt="..."> -->
		  <div class="card-body">
		    <h3 class="card-title">Quel est la différence entre le pole nord et le pole nord mais pas pareil ?</h3>
		    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
		    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
		    <a href="#" class="btn btn-primary">Lire l'article</a>
		    <button type="button" class="btn btn-outline-danger">Effacer news</button>
		  </div>
		</div>
	</div>

	<nav aria-label="Page navigation example">
	  <ul class="pagination justify-content-center">
	    <li class="page-item">
	      <a class="page-link" href="#" aria-label="Previous">
	        <span aria-hidden="true">&laquo;</span>
	      </a>
	    </li>
	    <li class="page-item active"><a class="page-link" href="#">1</a></li>
	    <li class="page-item"><a class="page-link" href="#">2</a></li>
	    <li class="page-item"><a class="page-link" href="#">3</a></li>
	    <li class="page-item">
	      <a class="page-link" href="#" aria-label="Previous">
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