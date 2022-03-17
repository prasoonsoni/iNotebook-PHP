<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/register.css">
    <title>iNotebook - Register</title>
</head>

<body class="main-container">
    <div class="register-here">
        <h1>Create an account</h1>
    </div>
    <div class="container">
        <div class="img-container">
            <a href="./index.php">
                <img src="./assets/logo.png" alt="logo" class="img">
            </a>
        </div>
        <form action="./scripts/register_script.php" class="form-container" method="post">
            <label class="form-label" for="name">Name</label>
            <input class="form-input" type="text" name="name" id="name" placeholder="John Doe">
            <label class="form-label" for="email">E-Mail</label>
            <input class="form-input" type="email" name="email" id="email" placeholder="domain@email.com">
            <label class="form-label" for="password">Password</label>
            <input class="form-input" type="password" name="password" id="password" placeholder="********">

            <button class="btn" id="login"">Register</button>
            <div class=" register">
                <p class="text">Already have an account? <a href="./login.php" class="link">Login here.</a></p>
    </div>
    </form>
    </div>
    <!-- <script src="./scripts/register.js"></script> -->
    <!-- Font Awesome Library -->
    <script src="https://kit.fontawesome.com/7c91c6f599.js" crossorigin="anonymous"></script>
</body>

</html>