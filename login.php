<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/login.css">
    <title>iNotebook - Login</title>
</head>

<body class="main-container">
    <div class="login-here">
        <h1>Login Here</h1>
    </div>
    <div class="container">
        <div class="img-container">
            <a href="./index.php">
                <img src="./assets/logo.png" alt="logo" class="img">
            </a>
        </div>
        <form action="./scripts/login_script.php" class="form-container" method="POST">
            <label class="form-label" for="email">Enter E-Mail</label>
            <input class="form-input" type="email" name="email" id="email" placeholder="domain@email.com">
            <p class="email-error display-error">
            </p>
            <label class="form-label" for="password">Enter Password</label>
            <input class="form-input" type="password" name="password" id="password" placeholder="********">
            <button class="btn" id="login"">Login</button>
            <div class=" or">
                <hr> or
                <hr>
    </div>
    <div class="register">
        <p class="text">Don't have an account? <a href="./register.php" class="link">Create one.</a></p>
    </div>
    </form>
    </div>
    <script src="./scripts/login.js"></script>
    <!-- Font Awesome Library -->
    <script src="https://kit.fontawesome.com/7c91c6f599.js" crossorigin="anonymous"></script>
</body>

</html>