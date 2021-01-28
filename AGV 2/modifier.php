<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_modif.css">

    <!--CDN google fonts Police-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@600&display=swap" rel="stylesheet">

    <title>Vidéothèque - Modifier un film</title>
</head>
<body>
    <div class="menu">
        <ul class="menu_contenu">
            <img id="logo" src="Logo.png" alt="logo" width="90" heeight="90">      
            <li id="accueil"><a href="accueil.php">Accueil</a></li>
            <li id="bibliotheque"><a href="bibliotheque.php">Bibliothèque</a></li>
        </ul> 
    </div>
    <!--création du formulaire-->
    <div class="boite">
        <div id="formulaire">
            <form action="" method="post">
            <h1>Modifier un film</h1>
                <input class="film" type="text" class="form-control" name="titre" placeholder="Entrer le titre"> <br>
                <input class="genre" type="text" class="form-control" name="genre" placeholder="Entrer le genre"> <br>
                <input class="realisateur" type="text" class="form-control" name="realisateur" placeholder="Entrer le réalisateur"> <br>
                <input class="acteur" type="text" class="form-control" name="acteur" placeholder="Entrer un acteur"> <br>
                <input class="miniature" type="text" class="form-control" name="miniature" placeholder="Entrer le lien de l'image"> <br>
                <input class="synopsis" type="text" class="form-control" name="description" placeholder="Entrer une description"> <br>
                <button class="modifier" type="submit">Modifier</button>
            </form>
        </div>
    </div>
</body>
</html>

<?php
$bdd = new PDO ('mysql:host=127.0.0.1;dbname=videotheque;charset=utf8', 'admin', 'Simplon974', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

?>