<!DOCTYPE html>

<?php require_once("head.php") ?>


<body id="BackGroundPage" onload="newUpdate(); connexionPopupOnload(); AffichAdmin();">
	<main>
		<?php require_once("navbar.php") ?>
		<div class="text-center fs-1 border-bottom border-2 border-secondary bg-light" id="Titre"> <img src="Images\Symb_Etoile.png" alt="" class="float-start mt-1 ms-1"> Plat à la une <img src="Images\Symb_Etoile.png" alt="" class="float-end mt-1 me-1"></div>
		<?php require_once("probleme.php") ?>
		<?php require_once("TopContenu.php") ?>
	</main>

</body>

</html>