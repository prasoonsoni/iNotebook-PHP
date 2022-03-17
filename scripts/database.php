<?php 
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'inotebook');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
// creating database if not exist
$create_query = "CREATE DATABASE IF NOT EXISTS inotebook";
if($db->query($create_query)===TRUE) {
  // echo "Database created successfully. <br>";
} else {
  echo "Error: " . $db->error."<br>";
}


// using iwpassignments Database
$use_query = "USE inotebook";
if($db->query($use_query)===TRUE) {
  // echo "Using inotebook Database. <br>";
} else {
  echo "Error: " . $db->error."<br>";
}

// creating table if not exists
$create_user_table = "CREATE TABLE IF NOT EXISTS users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
  )";
  if($db->query($create_user_table)) {
    // echo "Table created successfully. <br>";
  } else {
    echo "Error: " . $db->error."<br>";
  }

// creating notes table if not exists
$create_notes_table = "CREATE TABLE IF NOT EXISTS notes (
    id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL,
    description VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL
  )";
  if($db->query($create_notes_table)) {
    // echo "Table created successfully. <br>";
  } else {
    echo "Error: " . $db->error."<br>";
  }
