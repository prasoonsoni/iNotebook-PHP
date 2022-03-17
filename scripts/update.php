<?php
include ("./database.php");
session_start();
$id = $_GET['id'];
echo $id;
$title = $_POST["title"];
$description = $_POST["description"];
$email = $_SESSION["login_user"];
echo $title . " " . $description;
$sql = "UPDATE notes SET title='$title', description='$description' WHERE id='$id'";
if ($db->query($sql)) {
    echo "Updated";
    header("location: ../home.php");
} else {
    echo "Error: " . $db->error."<br>";
}
?>