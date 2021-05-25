<?php 
include "./app/memory.php";
include "./config.php";
session_start();

// If password was not set, /login route is not needed.
if ($password_set == "NO PASSWORD") {
    header('Location: ./index.php'); // User will be redirected to index.
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Config. -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF interface</title>

    <!-- Bootstrap. -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">PDF Interface</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        About
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" target="_blank" href="http://github.com/splitvice/pdf-interface">Github repository</a>
                        <a class="dropdown-item" target="_blank" href="https://split-vice.com/technology/web-software/pdf-interface/">PDF Inteface's website</a>
                        <div class="dropdown-divider"></div>
                        <a target="_blank" class="dropdown-item" href="https://split-vice.com/s/twitter">Programmer's Twitter</a>
                    </div>
                </li>
            </ul>
        </div>

    </nav>

    <div class="container">
        <div class="col-12 col-sm-12 col-md-12 col-lg-4">
            <div class="form-group">
                <form action="auth.php" method="POST">
                    <label for="password">Enter password to access PDF Interface content.</label>
                    <input class="form-control" type="password" name="password" autofocus><br>
                    <input class="btn btn-primary" type="submit" value="submit">
                </form>
            </div>
        </div>
        <?php
        // If route is "ip:port/login.php?error=wrongPassword", an error
        // label will be displayed.
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "wrongPassword") {
                echo '
                <div class="alert alert-danger" role="alert">
                    Password is incorrect.
                </div>
                ';
            }
        }
        ?>
    </div>
</body>

</html>