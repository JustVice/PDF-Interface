<?php
include "./app/memory.php";
include "config.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Config. -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF Interface</title>

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
                <?php
                // Authentication is reviewed if it is True. If so, logout button will
                // be rendered on navbar.
                if (isset($_SESSION["user_authenticated"])) {
                    if ($_SESSION["user_authenticated"] == True) {
                        echo '
                    <li class="nav-item active">
                        <a class="nav-link" href="./logout.php">Logout<span class="sr-only">(current)</span></a>
                    </li>
                    ';
                    }
                }
                ?>

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
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">v1.0.0</a>
                </li>

            </ul>
        </div>

    </nav>

    <br>

    <div class="container">
        <br>
        <?php
        // By including pdf-load.php file, PHP will render a list of
        // files contained on path given. This also includes other folders
        // and mp3, mp4, etc...
        include "./app/pdf-load.php";
        ?>
        <br>
    </div>
</body>

</html>