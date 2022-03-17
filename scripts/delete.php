<?php 
include './database.php';
$id = $_GET['id'];
$delete_query = "DELETE FROM notes WHERE id = '$id'";
$result = mysqli_query($db, $delete_query);
if ($result) {
    echo "Deleted";
    header("location: ../home.php");
} else {
    echo "Error: " . $db->error."<br>";
}
?>