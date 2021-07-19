<?php require_once("head.php") ?>
<?php

$link = mysqli_connect('localhost', 'root', '', 'magasin');

$sql = "INSERT INTO produits (prix, titre, compo1, compo2, compo3, calorie, img_chemin, type, note) VALUES (" . $_POST['prix'] . ",'" . $_POST['nom_produit'] . "','" . $_POST['compo1'] . "','" . $_POST['compo2'] . "','" . $_POST['compo3'] . "'," . $_POST['cal'] . ",'" . $_POST['imagechem'] . "','" . $_POST['typeproduit'] . "','" . $_POST['note'] . "')";


if (mysqli_query($link, $sql) && isset($_POST['nom_produit'])) {
	echo "Records inserted successfully.";
	switch ($_POST['typeproduit']) {
		case 'Burger':
			header('Location: Categorie 1.php');
			break;
		case 'Salade':
			header('Location: Categorie 2.php');
			break;
		case 'Boisson':
			header('Location: Categorie 3.php');
			break;
		case 'Dessert':
			header('Location: Categorie 4.php');
			break;
		default:
			# code...
			break;
	}
} else {
	echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}


?>