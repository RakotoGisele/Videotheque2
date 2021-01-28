<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_bibliotheque.css">

    <!--CDN google fonts Police-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@600&display=swap" rel="stylesheet">

    <title>Vidéothèque - Bibliothèque</title>
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


    <?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("127.0.0.1", "admin", "Simplon974", "videotheque");
 
//vérification connexion
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM film";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){

        while($row = mysqli_fetch_array($result)){

            
            
            
            echo "<div class=\"card\">\n";
            echo "                <h3>" . $row['titre'] . "</h3>\n";
            echo "                <img src=\"" . $row['miniature'] . "\" width='200px'\"\">\n";
            echo "                <p>Genre: " . $row['genre'] . "</p>\n";
            echo "                <p>Réalisateur: " . $row['realisateur'] . "</p>\n";
            echo "                <p>Acteur: " . $row['acteur'] . "</p>\n";
            echo "                <p>Synopsis: " . $row['synopsis'] . "</p>\n";
            echo "                <button class=\"modifier\" type=\"button\">Modifier</button>\n";
            echo '<a href="supprimer.php?id='. $row['id'] .'" >supprimer</a>';
            echo "        </div>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
        


</body>
</html>