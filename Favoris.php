<!DOCTYPE html>

<?php require_once("head.php"); ?>

<body onload="connexionIconColor(); afficherFavoris(); updateQuantityFavoris(); AffichAdmin();" class="bg-secondary text-center">
	<main>
	<?php  require_once("navbar.php") ?>
		<div id="ContainerFavoris">
			<div class="text-center fs-1 bg-light border-bottom border-2 border-secondary" id="Titre"> <img
					src="Images\Symb_Etoile.png" alt="" class="float-start mt-1 ms-1"> Favoris <img
					src="Images\Symb_Etoile.png" alt="" class="float-end mt-1 me-1"></div>
			<div id="ContenuFavoris">
				<div style="background-color: white; border-radius: 20px;">
					<strong>Vos Favoris</strong>
				</div>
				<div>
					<table class="table-bordered bg-dark" id="VosFavoris">

					</table>
				</div>
				<div>
					<div id="ButtonPanier" style="margin-top: 40px;">
						<a href="Panier.php"><Button>Panier</Button></a>
						<Button onClick="resetFavoris();">Vidé les favoris</Button>
						<a href="index.php"><Button>Menu</Button></a>
					</div>
				</div>
			</div>
		</div>
		</div>
</body>

</html>