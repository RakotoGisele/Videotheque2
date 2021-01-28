echo '<a href="supprimer.php?id='. $donnees['id'] .'" >supprimer</a>';
[16:31]
<?php
$id=$_GET['id'];
echo $id;
$servername = "127.0.0.1";
$username = "admin";
$password = "Simplon974";
$dbname = "videotheque";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);

}
$sql = "DELETE FROM film WHERE id=".$id;

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
header("location:bibliotheque.php");

?>