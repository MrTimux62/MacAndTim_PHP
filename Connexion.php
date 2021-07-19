<!DOCTYPE html>


<?php require_once("head.php") ?>

<body onload="AffichAdmin();" class="bg-secondary text-center">
	<main>
		<?php require_once("navbar.php") ?>
		<?php
		if (isset($_SESSION['login'])) {
			echo "<main class='form-signin'>
		<img class='mb-4' src='Images\Symb_Burger.png' alt='' width='72' height='72'>
	<form method='POST' action='deletesession.php'>
		<input type='submit' value='Déconnexion' onclick='adminreset();' id='ValidConnect' class='w-100 btn btn-lg btn-primary'></input>
		</form> 
	</main>
	<form method='post' action='deletesession.php'>
	<Button style='position:absolute; bottom: 0px; right: 0px;' onClick='resetAll();'>Reset</Button>
	</form>
</main>";
		} else {
			echo "<main class='form-signin'>
		<img class='mb-4' src='Images\Symb_Burger.png' alt='' width='72' height='72'>
		<h1 id='ConnectTitle' class='h3 mb-3 fw-normal text-white'>Se Connecter</h1>
	<form method='POST' action='login.php'>
		<div class='form-floating mb-2'>
		  <input type='text' class='form-control' id='user' name='login' placeholder=' ' required>
		  <label for='floatingInput'>Nom d'utilisateur</label>
		</div>
		<div class='form-floating' id='ResultConnexion'>
		  <input type='password' class='form-control' id='password' name='password' placeholder=' ' required>
		  <label for='floatingPassword'>Mot de passe</label>
		</div>
		<div class='loader'>
		</div>
		<input type='submit' value='Connexion' id='ValidConnect' onclick='connexion();' class='w-100 btn btn-lg btn-primary'></input>
		</form>
		<a href='inscription.php'><p class='text-primary mt-1 btn'>S'inscrire</p></a>  
	</main>
	<form method='post' action='deletesession.php'>
	<Button style='position:absolute; bottom: 0px; right: 0px;' onClick='resetAll();'>Reset</Button>
	</form>
</main>";
		}

		?>

</body>

</html>