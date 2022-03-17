<?php
include ("./database.php");
session_start();

$title = $_POST["title"];
$description = $_POST["description"];
$email = $_SESSION["login_user"];
$sql = "INSERT INTO notes (title, description, email) VALUES ('$title', '$description', '$email')";
if ($db->query($sql)) {
    echo "Inserted";
    header("location: ../home.php");
} else {
    echo "Error: " . $db->error."<br>";
}
?>
