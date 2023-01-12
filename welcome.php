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
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css">
    <style type="text/css">a:link{text-decoration:none}</style>
</head>
<body>

    <header>
        <radius><li><a href="index.php" style="color:white;"><b>ACCUEIL</b></li></a></radius>
        <radius><li><a href="deconnexion.php" style="color:white;"><b>FERMER</b></li></a></radius>
    </header>

    <?php
     // Ensuite on affiche le contenu de la variable session
     echo "<main> 
                <br>
                <p> Bonjour " .  $_SESSION['username'] . " ! </p> 
                Que souhaitez-vous faire ?
                <br>
                <br>
                <form action='Inserts/insert_welcome.php' method='post'>
                <input type='submit' name='Play' value='Nouvelle partie'>
                    
                <input type='submit' name='Retour' value='Retourner'>
                <br>
                <br>
          </main>
          ";
    ?>
</body>
</html>