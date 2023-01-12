<!DOCTYPE html>
<html>
<head>
<title><?php echo "Connexion" ?></title>
<link rel="stylesheet" href="style.css">
<style type="text/css">a:link{text-decoration:none}</style>
</head>

<body>
    <header>
        <radius><li><a href="index.php" style="color:white;">ACCUEIL</li></a></radius>
    </header>

    <main>

    <br>

    <form action="Inserts/insert_connexion.php" method="post">
        <div class="formulaire">
        <br>
        <li>Votre pseudo :</li><br><input type="text" placeholder="Pseudo" name="username" autocomplete="off"/>        <br/>
        <br/>
        <input type="submit" name="Envoyer" value="Confirmer">
        <br>
        <br>
        </div>
    </form>

    </main>

    </body>

    <footer>
        <li><a href="https://laplateforme.io/"><img src="Images/logo_laplateforme_bleu3.png" height=100px width=400px></a>
    </footer>

