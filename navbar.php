<html>
<nav class="navbar navbar-expand-md navbar-dark bg-dark align-top border-bottom border-2 border-secondary" aria-label="Fourth navbar example">
	<div class="container-fluid">
		<a class="navbar-brand" href="index.php"> <img src="Images\Symb_Burger.png" alt=""> Mac&Tim</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarsExample04">
			<ul class="navbar-nav me-auto mb-2 mb-md-0">
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="Categorie 1.php">Burgers</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="Categorie 2.php">Salades</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="Categorie 3.php">Boissons</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="Categorie 4.php">Desserts</a>
				</li>
			</ul>
		</div>
		<div class="collapse navbar-collapse float-right" id="navbarsExample04">
			<ul class="navbar-nav me-auto mb-2 mb-md-0">
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="Connexion.php"><img id="ConnexionIcon" src=<?php session_start();
																													if (isset($_SESSION['login'])) {
																														echo "Images/Connectvert.png";
																													} else {
																														echo "Images/Connectrouge.png";
																													} ?> alt=""></a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="Favoris.php"><img id="FavorisIcon" src="Images\favoris.png" alt=""></a>
				</li>
				<li class="nav-item">
					<a ondrop="drop(event)" ondragover="allowDrop(event)" class="nav-link active" aria-current="page" href="Panier.php"><img id="PanierIcon" src="Images\panier.png" alt=""></a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="Search.php"><img id="SearchIcon" src="Images\search.png" alt=""></a>
				</li>
				<li class="nav-item AdminPart" style="display: none;">
					<a class="nav-link active" aria-current="page" href="Modif.php"><img id="EngrenageIcon" src="Images\engrenage.png" alt=""></a>
				</li>
			</ul>
			<input class="form-control me-2" onkeyup="myFunction()" id="SearchBar" type="search" placeholder="Saisir votre produit" aria-label="Search">
		</div>
	</div>
</nav>

</html>