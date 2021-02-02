<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


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
            <li id="accueil"><a href="index.php">Accueil</a></li>
            <li id="bibliotheque"><a href="bibliotheque.php">Bibliothèque</a></li>
        </ul> 
    </div>

    <div class="table-responsive">
    <table class="table">
  <thead>
    <tr>
            <th>Titre</th>
            <th>Image</th>
            <th>Genre</th>
            <th>Réalisateur</th>
            <th>Acteurs</th>
            <th>Synopsis</th>
            <th>Actions</th>
            <th></th>
    </tr>
  </thead>
  <tbody>
    <tr>
    </div>

    

   

    <?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "admin", "Simplon974", "videotheque");
$link->set_charset("utf8");
//vérification connexion
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM film";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){


        while($row = mysqli_fetch_array($result)){



            
echo "            <thead>\n";
echo "            <tr>\n";
echo "            <td class=\"align-middle\"> ". $row['titre'] ."</td>\n";
echo "            <td class=\"align-middle\"><img class=\"thumbnail\"src=\"" . $row['miniature'] . "\" width='80px'\"\">\n</td>";
echo "            <td class=\"align-middle\"> ". $row['genre'] ."</td>\n";
echo "            <td class=\"align-middle\"> ". $row['realisateur'] ."</td>\n";
echo "            <td class=\"align-middle\"> ". $row['acteur'] ."</td>\n";
// substr = utilisé pour limiter le nombre de caractère 
echo "            <td class=\"align-middle\" data-bs-toggle=\"tooltip\" data-bs-placement=\"left\" title=\"".$row['synopsis']."\">". substr($row['synopsis'], 0, 143) ."</td>\n";
echo '<td><a class="btn btn-primary" href="modifier.php?id='. $row['id'] .'" >modifier</a></td>';
echo '<td><a class="btn btn-danger" href="supprimer.php?id='. $row['id'] .'" >supprimer</a></td>';


        
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