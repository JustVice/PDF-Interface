<?php

include "config.php";

if ($password_set == "NO PASSWORD") {
    // If password not set index route content is rendered.
    renderHomePageContent();
} else {
    if (!isset($_SESSION["user_authenticated"])) {
        // If no auth variable created, user is redirected to login route.
        header('Location: login.php');
    } else {
        if ($_SESSION["user_authenticated"]) {
            // If user was authenticated, index content is rendered.
            renderHomePageContent();
        } else {
            // If user has not been authenticated, user is
            // redirected to login route.
            header('Location: login.php');
        }
    }
}
 /**
  * Renders on index the PDF list. 
  */
function renderHomePageContent()
{
    include "config.php";
    $pdfsFilesNames = scandir($pdfs_folder_path);

    if (count($pdfsFilesNames) > 2) { // At least one file or folder found.
        echo "<ul class='list-group'>";
        for ($x = 0; $x < count($pdfsFilesNames); $x++) {
            if ($x != 0 && $x != 1) {
                echo '<li class="list-group-item"> <a target="_blank" href="'
                    . $pdfs_folder_path . '/' . $pdfsFilesNames[$x] .'">' 
                    . $pdfsFilesNames[$x] . '</a></li>';
            }
        }
        echo "</ul>";
    } else { // No PDFs found. 
        echo '
        <div class="alert alert-primary" role="alert">
            No PDFs files.
        </div>
        ';
    }
}
