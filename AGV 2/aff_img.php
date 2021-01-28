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
        echo "<table>";
            echo "<tr>";
                echo "<th>id</th>";
                echo "<th>titre</th>";
                echo "<th>genre</th>";
                echo "<th>realisateur</th>";
                echo "<th>acteur</th>";
                echo "<th>miniature</th>";
                echo "<th>synopsis</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['titre'] . "</td>";
                echo "<td>" . $row['genre'] . "</td>";
                echo "<td>" . $row['realisateur'] . "</td>";
                echo "<td>" . $row['acteur'] . "</td>";
                echo "<td>" . $row['miniature'] . "</td>";
                echo "<td>" . $row['synopsis'] . "</td>";
            echo "</tr>";
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