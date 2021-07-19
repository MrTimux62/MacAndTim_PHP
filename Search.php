<!DOCTYPE html>

<?php require_once("head.php"); ?>

<body id="BackGroundPage" onload="newUpdate(); connexionIconColor(); AffichAdmin();">
	<main>
		<?php require_once("navbar.php") ?>
		<div class="text-center fs-1 bg-light border-bottom border-2 border-secondary" id="Titre"> <img src="Images\searchblack.png" alt="" class="float-start mt-1 ms-1"> Recherche <img src="Images\searchblack.png" alt="" class="float-end mt-1 me-1"></div>
		<?php require_once("SearchContenu.php") ?>
		<?php require_once("probleme.php") ?>
	</main>
</body>

</html>