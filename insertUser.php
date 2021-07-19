<?php require_once("head.php") ?>
<?php

require_once("BDDConnect.php");
$same = 0;

foreach ($pdo->query("SELECT * FROM users WHERE 1") as $row) {
	if ($_POST['login'] == $row['username']) {
		$same = 1;
	}
}

if ($same == 0) {
	$sql = "INSERT INTO `users`(`username`, `password`) VALUES ('" . $_POST['login']  . "','" . $_POST['password']  . "')";
	$pdo->query($sql);
	header("location: connexion.php");
} else {
	header("location: inscription.php");
}


?>