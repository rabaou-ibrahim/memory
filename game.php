<?php 
//On demare la session sur sur cette page 
session_start() ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeu</title>
    <link rel="stylesheet" href="style.css">
    <style type="text/css">a:link{text-decoration:none}</style>
</head>

<body>

<header style="color:white;">
    <li><a href="index.php" style="color:white;">ACCUEIL</a></li>
</header>

<p style="color:white;">
    <u>Nombre de tentatives :</u>
</p>

<main>


<?php
        $path = 'Images/carte_cachée/'; // chemin vers le dossier contenant tes images (ne pas oublier le slash final)
        $tab = scandir($path); // Place tes images dans un tableau
        $tab = array_slice($tab, 2); // J'avais oublier que scandir listait . et .. donc on les vires aussi
        $tab = array_slice($tab, 0, $_SESSION['pick']); // Garde les 6 premières images

        echo ("<br>");
        echo ("Vous avez choisi". " " . $_SESSION['pick'] . " " ."paires");

        // Enfin on fait une boucle du tableau pour l'affichage
        echo '<div>';
        echo '<br>';

        foreach($tab as $img) {

        for ($i=0; $i<=($_SESSION['pick']%2); $i++) {
          echo '<img src="'.$path.$img.'" alt="" height=130px width=130px/> ';
        }
        
        echo '<br>';
        
        for ($i=0; $i<=($_SESSION['pick']%2); $i++) {
            echo '<img src="'.$path.$img.'" alt="" height=130px width=130px/> ';
          }

        }
?>

</main>

</body>

