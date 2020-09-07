<?php
include "./app/memory.php";
include "config.php";
include "./app/memory.php";
session_start();

// Password verification process.
if(isset($_POST["password"])){
    if($_POST["password"] == $password_set){
        $_SESSION["user_authenticated"] = True;
        header('Location: ./index.php');
    }else{
        header('Location: login.php?error=wrongPassword');
    }
}else{
    header('Location: login.php');
}