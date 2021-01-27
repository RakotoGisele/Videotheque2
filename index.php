<?php
if (isset($_POST['modifier']) || isset($_POST['ajouter'])) {
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap CDN-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>

    <!--CDN google fonts Police-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@600&display=swap" rel="stylesheet">

    <title>Vidéothèque</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand"><img src="Logo.png" alt="logo" width="50"
                    height="50"></a>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Bibliothèque</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Rechercher" aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit">Rechercher</button>
                </form>
            </div>
        </div>
    </nav>
            <div class="row bg-primary">
                <div class="col-4"></div>
                <div class="col-4 text-center">
                    <h1 class="titre">BIENVENUE</h1>
                <form method="post" action="">
                    <input class="film" type="text" name="titre" placeholder="Entrer un titre"> <br>
                    <input class="genre" type="text" name="genre" placeholder="Entrer un genre"> <br>
                    <input class="realisateur" type="text" name="realisateur" placeholder="Entrer un realisateur"> <br>
                    <input class="acteur" type="text" name="acteur" placeholder="Entrer un acteur"> <br>
                    <input class="miniature" type="text" name="miniature" placeholder="Entrer une image"> <br>
                    <input class="description" type="text" name="description" placeholder="Entrer une description"> <br>
                    <input class="ajouter" type="submit" value="Ajouter">
                </form></div>
                <div class="col-4"></div>
            </div>
            <!--Partie footer -->
            <nav class="navbar navbar-light bg-light">
  <form class="container-fluid justify-content-start">
    <button class="btn btn-outline-success me-12" type="button">Main button</button>
    <button class="btn btn-sm btn-outline-secondary" type="button">Smaller button</button>
  </form>
</nav>
</body>

</html>

<!-- Connexion et envoie des éléments à la base de donnée --> 
<?php
$bdd = new PDO ('mysql:host=127.0.0.1;dbname=videotheque;charset=utf8', 'admin', 'Simplon974', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
$reponse = $bdd->query('SELECT * FROM categorie');
if (isset($_POST['titre']) && isset($_POST['genre']) && isset($_POST['realisateur']) && isset($_POST['acteur']) && isset($_POST['miniature']) && isset($_POST['description'])) {
    $requete = 'INSERT INTO categorie VALUES (NULL,"'. $_POST['titre'] .'","'. $_POST['genre'] .'","'. $_POST['realisateur'] .'","'. $_POST['acteur'] .'","'. $_POST['miniature'] .'","'. $_POST['description'] .'")';
    $resultat = $bdd->query($requete);
}
?>