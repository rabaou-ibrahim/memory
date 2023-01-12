<?php

session_start();

$username = $_POST['username'];

if (isset($_POST['Envoyer'])) { // Si je confirme mon pseudo
    header("Location:../welcome.php"); // On redirige l'utilisateur à la page game
    $_SESSION['username'] = $username;
}

?>