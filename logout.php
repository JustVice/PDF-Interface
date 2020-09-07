<?php
// Route to logout session. Only if password was set.

include "./app/memory.php"; // Required memory to load session variables.
session_start();

if(!isset($_SESSION["user_authenticated"])){
    $_SESSION["user_authenticated"] = False; // user_authenticated variable set to False;
}else{
    $_SESSION["user_authenticated"] = False; // user_authenticated variable set to False;
}

// User is redirected to index.php . index.php will redirect user to login
// if password was set.
header('Location: ./index.php'); 
