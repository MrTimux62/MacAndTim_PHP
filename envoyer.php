<!DOCTYPE html>

<?php require_once("head.php") ?>

<body onload="connexionIconColor(); envoieRedirect();">
	<main class="text-center">
		<?php require_once("navbar.php") ?>
		<div>
		
		
		<?php 
		
		if (empty($_POST['email']) || empty($_POST['comment'])) {
			echo "<p class='text-danger mt-5 fs-1'>Message Non Envoyer !";
		} else {
			echo "<p class='text-success mt-5 fs-1'>Message Envoyer !";
		}
		
		?>
		
		
		</p>
		<p class="text-primary fs-3">Votre Email : <?php

		if (empty($_POST['email'])) {
			echo "Email Invalide"; 
		} else {
			echo $_POST['email']; 
		}

		 ?></p>
		<p class="text-dark fs-4">Commentaire : <?php
		
		if (empty($_POST['comment'])) {
			echo "Texte Invalide"; 
		} else {
			echo $_POST['comment']; 
		}
		
		
		?></p>
		</div>
		<div class="spinner-border" role="status">
			<span class="visually-hidden"></span>
		</div>
		<div>
		<p>Redirection en cours...</p>
		</div>
		<?php ?>
	</main>
</body>

</html>