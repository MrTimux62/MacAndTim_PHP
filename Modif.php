<!DOCTYPE html>


<?php require_once("head.php") ?>

<body onload="connexionIconColor(); AffichAdmin();" class="bg-light text-center">
	<main class="AdminPart">
		<?php require_once("navbar.php") ?>
		<div class="mt-5 fs-2">
			Ajouter un article
			<form action="InsertTable.php" method="post" class="mt-5 fs-3">
				<p><input type="text" name="nom_produit" minlength="5" required placeholder="Nom du Produit" /></p>
				<p><select name="typeproduit" id="" required>
						<option value=""> Type du Produit </option>
						<option value="Burger">Burger</option>
						<option value="Salade">Salade</option>
						<option value="Boisson">Boisson</option>
						<option value="Dessert">Dessert</option>
					</select></p>
				<p><input type="number" step=".01" min="0" name="prix" required placeholder="Prix" /></p>
				<p><input type="text" name="imagechem" required placeholder="Chemin Image" /></p>
				<p><input type="number" min="0" name="cal" required placeholder="Calorie" /></p>
				<p><input type="text" name="compo1" required placeholder="Composition 1" /></p>
				<p><input type="text" name="compo2" placeholder="Composition 2" /></p>
				<p><input type="text" name="compo3" placeholder="Composition 3" /></p>
				<p><input type="text" name="note" required placeholder="Note du produit" /></p>
				<p><input type="submit" value="Ajouter" class="btn btn-success btn-lg"></p>
			</form>
		</div>
	</main>
</body>

</html>

<!-- <p>Type du produit : <input type="text" name="typeproduit" /></p> -->