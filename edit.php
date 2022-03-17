<?php session_start();
include('./scripts/database.php');
$user = $_SESSION['login_user'];
if (empty($user)) {
    header("location: ./index.php");
    exit();
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Home</title>
</head>

<body>
    <h1 class="container mt-5">Update Note</h1>
    <?php
    $id = $_GET['id'];
    $get_note = "SELECT * FROM notes WHERE id ='$id'";
    $result = mysqli_query($db, $get_note);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $title = $row['title'];
    $description = $row['description'];
    ?>
    <form class="container" method="POST" action=<?php echo "./scripts/update.php?id=$id" ?>>
        <div class="form-group">
            <label for="exampleFormControlInput1">Title</label>
            <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Enter title here..." value=<?php echo $title ?>>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Description</label>
            <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3" placeholder="Enter description here..."><?php echo $description ?></textarea>
        </div>
        <button id="submit_button" class="btn btn-success"><i class="fa-solid fa-pen"></i> Update Note</button>
    </form>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Font Awesome Library -->
    <script src="https://kit.fontawesome.com/7c91c6f599.js" crossorigin="anonymous"></script>
</body>

</html>