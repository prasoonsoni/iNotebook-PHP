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
    <h1 class="container mt-5">Add Note</h1>
    <form class="container" method="POST" action="./scripts/insert.php">
        <div class="form-group">
            <label for="exampleFormControlInput1">Title</label>
            <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Enter title here...">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Description</label>
            <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3" placeholder="Enter description here..."></textarea>
        </div>
        <button onClick="handleClick()" id="submit_button" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Add Note</button>
    </form>

    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col">
                <h1>Your Notes</h1>
                <?php
                $user = $_SESSION['login_user'];
                $sql = "SELECT * from notes where email='$user'";
                $result = mysqli_query($db, $sql);
                $count = mysqli_num_rows($result);
                if($count == 0){
                    echo "No notes available.";
                }
                while ($fetch = mysqli_fetch_assoc($result)) {
                    echo '<div class="card my-2">
                        <div class="card-body">
                            <h5 class="card-title">' . $fetch['title'] . '</h5>
                            <p class="card-text">' . $fetch['description'] . '</p>
                            <a class="btn btn-success" href="./edit.php?id='.$fetch['id'] .'"role="button"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                            <a class="btn btn-danger" href="./scripts/delete.php?id=' . $fetch['id'] . '" role="button"><i class="fa-solid fa-trash"></i> Delete</a>
                        </div>
                    </div>';
                }
                ?>
            </div>
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
        const handleClick = (event) => {
            event.preventDefault();
        }
    </script>
    <!-- Font Awesome Library -->
    <script src="https://kit.fontawesome.com/7c91c6f599.js" crossorigin="anonymous"></script>
</body>

</html>