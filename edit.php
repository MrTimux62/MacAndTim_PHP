<?php require_once("head.php") ?>

<body onload="connexionIconColor(); AffichAdmin();" class="bg-light text-center">
	<main class="AdminPart">
		<?php require_once("navbar.php") ?>
		<?php require_once("BDDConnect.php");

		foreach ($pdo->query("SELECT * FROM produits WHERE id_produit = '" . $_POST['idprod'] . "'") as $row) {
			//echo $row['titre']."<br/>";
			$id = $row['id_produit'];
			$type = $row['type'];
			$name = $row['titre'];
			$prix = $row['prix'];
			$chemin = $row['img_chemin'];
			$Cal = $row['calorie'];
			$Compo1 = $row['compo1'];
			$Compo2 = $row['compo2'];
			$Compo3 = $row['compo3'];
			$note = $row['note'];
		}

		?>
		<div class="mt-5 fs-2">
			Modifier Article
			<form action="modifTable.php" method="post" class="mt-5 fs-3">
				<p>ID : <input type="text" name="id_prod" minlength="5" value='<?php echo $id ?>' readonly="readonly" /></p>
				<p>Nom du produit : <input type="text" name="nom_produit" minlength="5" value='<?php echo $name ?>' placeholder="Nom du Produit" /></p>
				<p>Type : <input type="text" value='<?php echo $type ?>' name="type" readonly="readonly"></p>
				<p>Prix : <input type="number" value='<?php echo $prix ?>' step=".01" min="0" name="prix" required placeholder="Prix" oninput="(this.value < 0) ? this.value = 0 : this.value;"/></p>
				<p>Img : <input type="text" value='<?php echo $chemin ?>' name="imagechem" required placeholder="Chemin Image" /></p>
				<p>Calorie : <input type="number" value='<?php echo $Cal ?>' min="0" name="cal" required placeholder="Calorie" oninput="(this.value < 0) ? this.value = 0 : this.value;"/></p>
				<p>Compo1 : <input type="text" value='<?php echo $Compo1 ?>' name="compo1" required placeholder="Composition 1" /></p>
				<p>Compo2 : <input type="text" value='<?php echo $Compo2 ?>' name="compo2" placeholder="Composition 2" /></p>
				<p>Compo3 : <input type="text" value='<?php echo $Compo3 ?>' name="compo3" placeholder="Composition 3" /></p>
				<p>Note : <input type="text" value='<?php echo $note ?>' name="note" required placeholder="Note du produit" /></p>
				<p><input type="submit" value="Modifier" class="btn btn-success btn-lg"></p>
			</form>
			<form action="deleteTable.php" method="post">
				<p style="display: none;">ID : <input type="text" name="id_prod" minlength="5" value='<?php echo $id ?>' readonly="readonly" /></p>
				<p style="display: none;">Type : <input type="text" value='<?php echo $type ?>' name="type" readonly="readonly"></p>
				<p><input type="submit" value="Supprimer" class="btn btn-danger btn-lg"></p>
			</form>
		</div>
	</main>
</body>

</html>

<!-- <p>Type du produit : <input type="text" name="typeproduit" /></p> -->