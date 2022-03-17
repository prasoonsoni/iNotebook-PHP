<?php
include('./database.php');
session_start();
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
if ($db->query($sql)) {
    echo "User Created";
    header("location: ../register.php");
} else {
    echo "Error: " . $db->error . "<br>";
}
