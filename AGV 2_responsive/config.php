<!-- Connexion et envoie des éléments à la base de donnée --> 
<?php
$bdd = new PDO ('mysql:host=localhost;dbname=id16063553_videotheque;charset=utf8', 'id16063553_admin', 'rY|FF9jZsaC/UZZm', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
$reponse = $bdd->query('SELECT * FROM film');
if (isset($_POST['titre']) && isset($_POST['genre']) && isset($_POST['realisateur']) && isset($_POST['acteur']) && isset($_POST['miniature']) && isset($_POST['synopsis'])) {
    $requete = 'INSERT INTO film VALUES (NULL,"'. $_POST['titre'] .'","'. $_POST['genre'] .'","'. $_POST['realisateur'] .'","'. $_POST['acteur'] .'","'. $_POST['miniature'] .'","'. $_POST['synopsis'] .'")';
    $resultat = $bdd->query($requete);
}
?>