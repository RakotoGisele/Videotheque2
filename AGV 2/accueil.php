<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_accueil.css">

    <!--CDN google fonts Police-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@600&display=swap" rel="stylesheet">

    <title>Vidéothèque - Accueil</title>
</head>
<body>
    <!--Création de la barre de navigation -->
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
            <form method="post">
            <h1 class="titre">Bienvenue</h1>
                <input class="film" type="text" name="titre" placeholder="Entrer un titre"> <br>
                <input class="genre" type="text" name="genre" placeholder="Entrer un genre"> <br>
                <input class="realisateur" type="text" name="realisateur" placeholder="Entrer un realisateur"> <br>
                <input class="acteur" type="text" name="acteur" placeholder="Entrer un acteur"> <br>
                <input class="miniature" type="text" name="miniature" placeholder="Entrer une image"> <br>
                <input class="synopsis" type="text" name="synopsis" placeholder="Entrer une description"> <br>
                <input class="ajouter" type="submit" value="Ajouter">
            </form>
        </div>
    </div>
    <footer>
        <ul>
            <li>
                Créateur: <a href="https://github.com/RakotoGisele/Videotheque2" id="github">Github</a>
            </li>
            <li>
                RAKOTOARIVONY Gisèle
            </li>
            <li>
                VICTORINE Julien
            </li>
            <li>
                AH-KENG Abel
            </li>
            <li>
                copyright© copyright 2021
            </li>
        </ul>
    </footer>
</body>
</html>

<!-- Connexion et envoie des éléments à la base de donnée --> 
<?php
$bdd = new PDO ('mysql:host=127.0.0.1;dbname=videotheque;charset=utf8', 'admin', 'Simplon974', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
$reponse = $bdd->query('SELECT * FROM film');
if (isset($_POST['titre']) && isset($_POST['genre']) && isset($_POST['realisateur']) && isset($_POST['acteur']) && isset($_POST['miniature']) && isset($_POST['synopsis'])) {
    $requete = 'INSERT INTO film VALUES (NULL,"'. $_POST['titre'] .'","'. $_POST['genre'] .'","'. $_POST['realisateur'] .'","'. $_POST['acteur'] .'","'. $_POST['miniature'] .'","'. $_POST['synopsis'] .'")';
    $resultat = $bdd->query($requete);
}
?>