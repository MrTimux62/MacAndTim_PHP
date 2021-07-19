<?php require_once("head.php") ?>
<?php

require("BDDConnect.php");

$sql = "DELETE FROM `produits` WHERE id_produit = ". $_POST['id_prod'] ."";

$pdo->query($sql);
switch ($_POST['type']) {
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

?>