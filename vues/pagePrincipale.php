<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Titre</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </head>

    <body style="background-color: #ff5ca4;">
    	<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
		  <div class="container-fluid">
		    <a class="navbar-brand" href="#">UltraBlog</a>
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		    </button>
		    <div class="collapse navbar-collapse" id="navbarSupportedContent">
		      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
		        <li class="nav-item">
		          <a class="nav-link active" aria-current="page" href="#">Acceuil</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="#">Gérer son espace administrateur</a>
		        </li>
		        <li class="nav-item dropdown">
		          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
		            Admin
		          </a>
		          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
		            <li><a class="dropdown-item" href="#">Se connecter</a></li>
		            <li><a class="dropdown-item" href="#">S'inscrire</a></li>
		            <li><hr class="dropdown-divider"></li>
		            <li><a class="dropdown-item" href="#">Poster une news</a></li>
		          </ul>
		        </li>
		      </ul>
		      <form class="d-flex">
		        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
		        <button class="btn btn-outline-success" type="submit">Search</button>
		      </form>
		    </div>
		  </div>
		</nav>

		<div style="height: 80px;"></div>

		<div class="container">
			<h1>UltraBlog</h1>
			<!--
			<button type="button" class="btn btn-primary">Ajouter une news</button>
			<button type="button" class="btn btn-secondary btn-md">Voir mes news sur cette page</button>
			-->
			
			<div class="mb-3">
			  <label for="exampleFormControlTextarea1" class="form-label">Poster une news</label>
			  <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
				<button type="button" class="btn btn-primary my-2">Je poste !</button>
			</div>
		</div>

		<div class="container my-5">
		  <div class="row">
			    <div class="col-8">
					<div class="container gy-5">
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
		    <div class="col-4">
		    	<div class="container">
		    		Un container
		    	</div>


		    </div>

			    


		  </div>
		</div>
    
    </body>
</html>