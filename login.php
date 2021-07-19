<?php

require_once("BDDConnect.php");

if (isset($_POST['login']) && isset($_POST['password'])) {
    session_start();
    foreach ($pdo->query("SELECT * FROM users WHERE 1") as $row) {
        echo $_POST['login']." ";
        echo $_POST['password']." <br>";
        if ($_POST['login'] == $row['username'] && $_POST['password'] == $row['password']) {
            
            $_SESSION['login'] = $_POST['login'];
            $_SESSION['password'] = $_POST['password'];
            if ($row['admin'] == 1) {
                $_SESSION['admin'] = $_POST['1'];
            } else {
                $_SESSION['admin'] = $_POST['0'];
            }
            header('location: index.php');
        }

    }
    if (isset($_SESSION['login'])) {
        # code...
    } else {
        header("location: connexion.php");
    }
}
?>