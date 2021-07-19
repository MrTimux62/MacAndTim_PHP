<?php require_once("head.php") ?>
<?php

$link = mysqli_connect('localhost', 'root', '', 'magasin');

$sql = "UPDATE `produits` SET `prix`=". $_POST['prix'] .",`titre`='". $_POST['nom_produit'] ."',`compo1`='". $_POST['compo1'] ."',`compo2`='". $_POST['compo2'] ."',`compo3`='". $_POST['compo3'] ."',`calorie`=". $_POST['cal'] .",`img_chemin`='". $_POST['imagechem'] ."',`type`='". $_POST['type'] ."',`note`='". $_POST['note'] ."' WHERE id_produit = ". $_POST['id_prod'] ."";


if (mysqli_query($link, $sql) && isset($_POST['nom_produit'])) {
	echo "Records inserted successfully.";
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
} else {
	echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}


?>