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
            <li id="accueil"><a href="index.php">Accueil</a></li>
            <li id="bibliotheque"><a href="bibliotheque.php">Bibliothèque</a></li>
        </ul> 
    </div>
    <!--création du formulaire-->
    <div class="boite">
        <div id="formulaire">
            <form action="" method="post">
            <h1>Modifier un film</h1>
                <input class="film" type="text" class="form-control" name="modif_titre" placeholder="Entrer le titre"> <br>
                <input class="genre" type="text" class="form-control" name="modif_genre" placeholder="Entrer le genre"> <br>
                <input class="realisateur" type="text" class="form-control" name="modif_realisateur" placeholder="Entrer le réalisateur"> <br>
                <input class="acteur" type="text" class="form-control" name="modif_acteur" placeholder="Entrer un acteur"> <br>
                <input class="miniature" type="text" class="form-control" name="modif_miniature" placeholder="Entrer le lien de l'image"> <br>
                <input class="synopsis" type="text" class="form-control"  value="modifier" name="modif_description" placeholder="Entrer une description"> <br>
                <input class="modifier" type="submit" value="modifier" name="modifier">
            </form>
        </div>
    </div>
</body>
</html>

<?php




$bdd = new PDO ('mysql:host=localhost;dbname=videotheque;charset=utf8', 'admin', 'Simplon974', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
if (isset($_POST['modifier'])) {
    $requete = 'UPDATE film SET titre="' . $_POST['modif_titre'] .'",
    genre="' . $_POST['modif_genre'] .'",
    realisateur="' . $_POST['modif_realisateur'] .'", 
    acteur="' . $_POST['modif_acteur'] .'",
    miniature="' . $_POST['modif_miniature'] .'"
    WHERE id="' . $_GET['id'] . '"';
    $resultat = $bdd->query($requete);
}
?>