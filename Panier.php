<!DOCTYPE html>

<?php require_once("head.php"); ?>


<body onload="connexionIconColor(); afficherPanier(); AffichAdmin();" class="bg-secondary text-center">
	<main>
		<?php require_once("navbar.php") ?>
		<div id="ContainerPanier">
			<div class="text-center fs-1 bg-light border-bottom border-2 border-secondary" id="Titre"> <img src="Images\panierblack.png" alt="" class="float-start mt-1 ms-1"> Panier <img src="Images\panierblack.png" alt="" class="float-end mt-1 me-1"></div>
			<div id="ContenuPanier">
				<div style="background-color: white; border-radius: 20px;">
					<strong>Contenu du Panier</strong>
				</div>
				<div>
					<table id="Article">
					</table>
				</div>
				<div id="ButtonPanier" style="margin-top: 40px;">
					<Button onClick="panierValidation(); connexionPopupPanier();">Valider</Button>
					<Button onClick="resetQuantity(); connexionPopupPanier();">Vider le Panier</Button>
					<a href="index.php"><Button>Menu</Button></a>
				</div>
			</div>
		</div>
		</div>
</body>

</html>