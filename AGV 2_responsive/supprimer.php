echo "<a href="supprimer.php?id='. $row['id'] .'" >Supprimer</a>";
[16:31]
<?php
$id=$_GET['id'];
echo $id;
$servername = "localhost";
$username = "id16063553_admin";
$password = "rY|FF9jZsaC/UZZm";
$dbname = "id16063553_videotheque";

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