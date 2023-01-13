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
        $tab = array_slice($tab, 2);
        $tab = array_slice($tab, 0, $_SESSION['pick']);
        shuffle($tab);

        echo ("<br>");
        echo ("Vous avez choisi". " " . $_SESSION['pick'] . " " ."paires");

        // Enfin on fait une boucle du tableau pour l'affichage
        echo '<div>';
        echo '<br>';
        $count = 0;

        foreach($tab as $img) {

        for ($i=0; $i<=($_SESSION['pick'])-1; $i++) {
          echo '<img src="'.$path.$img.'" alt="" height=130px width=130px/> ';
          $count = $count+1;
        }
        
        echo '<br>';
        
        for ($i=0; $i<=($_SESSION['pick'])-1; $i++) {
            echo '<img src="'.$path.$img.'" alt="" height=130px width=130px/> ';
            $count = $count+1;
          }
          
        }
        echo '<br>';
        echo '<br>';

        echo "Il y a " . $count ." cartes à trouver. A vous de jouer ! ";
        // foreach(glob(IMAGEPATH.'*') as $filename){
        //    echo basename($filename) . "\n";
        // }

        $path2 = 'Images/Cartes/'; // chemin vers le dossier contenant tes images (ne pas oublier le slash final)
        $tab2 = scandir($path2); // Place tes images dans un tableau
        shuffle($tab2);
        $tab2 = array_slice($tab2, 2);
        $tab2 = array_slice($tab2, 0, $_SESSION['pick']); // Genere des images en respectant le nombre de paires tapé

        // Enfin on fait une boucle du tableau pour l'affichage
        echo '<div>';
        echo '<br>';


            foreach($tab2 as $img2) {

                echo '<img src="'.$path2.$img2.'" alt="" height=130px width=130px/> ';
                
              }
  
          shuffle($tab2);

        echo '<br>';

          foreach($tab2 as $img2) {
    

            echo '<img src="'.$path2.$img2.'" alt="" height=130px width=130px/> ';
            
          }
    

        
  
              
    
  
  var_dump($tab2);



?>

</main>
        <br>

</body>

