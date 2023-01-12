<?php 
//On demare la session sur sur cette page 
session_start() ;
?>

<!DOCTYPE html>
<html>
<head>
<title><?php echo "Choix du nombre de paires" ?></title>
<link rel="stylesheet" href="style.css">
<style type="text/css">a:link{text-decoration:none}</style>
</head>

<body>
    <header>
        <li><a href="index.php" style="color:white;">ACCUEIL</li></a>
        <li><a href="rankings.php" style="color:white;">CLASSEMENT</li></a>
        <li><a href="credits.php" style="color:white;">CREDITS</li></a>
    </header>

    <main>

    <label for="level-select">Choisissez le nombre de paires:</label>

    <?php
    $pick = null;
    if(isset($_POST['pick'])){
        $pick = $_POST['pick'];
    }
    switch($pick){
        case '3':  $_SESSION['pick'] = $pick ; header('location:game.php'); break;
        case '4':  $_SESSION['pick'] = $pick ; header('location:game.php'); break;
        case '5':  $_SESSION['pick'] = $pick ; header('location:game.php'); break;
        case '6':  $_SESSION['pick'] = $pick ; header('location:game.php'); break;
        case '7':  $_SESSION['pick'] = $pick ; header('location:game.php'); break;
        case '8':  $_SESSION['pick'] = $pick ; header('location:game.php'); break;
        case '9':  $_SESSION['pick'] = $pick ; header('location:game.php'); break;
        case '10':  $_SESSION['pick'] = $pick ; header('location:game.php'); break;
        case '11':  $_SESSION['pick'] = $pick ; header('location:game.php'); break;
        case '12':  $_SESSION['pick'] = $pick ; header('location:game.php'); break;
        default:
            echo ('Veuillez choisir votre nombre de paires');
    }
?>
<form name="myform" action="" method="post">
    <select name="pick" onchange="this.form.submit()">
    <option value="--Choix du nombre--">Choix</option>
        <option value="3"<?php if($pick == "3"){ echo " selected"; }?>>3</option>
        <option value="4"<?php if($pick == "4"){ echo " selected"; }?>>4</option>
        <option value="5"<?php if($pick == "5"){ echo " selected"; }?>>5</option>
        <option value="6"<?php if($pick == "6"){ echo " selected"; }?>>6</option>
        <option value="7"<?php if($pick == "7"){ echo " selected"; }?>>7</option>
        <option value="8"<?php if($pick == "8"){ echo " selected"; }?>>8</option>
        <option value="9"<?php if($pick == "9"){ echo " selected"; }?>>9</option>
        <option value="10"<?php if($pick == "10"){ echo " selected"; }?>>10</option>
        <option value="11"<?php if($pick == "11"){ echo " selected"; }?>>11</option>
        <option value="12"<?php if($pick == "12"){ echo " selected"; }?>>12</option>
    </select>
</form>
    

    </main>