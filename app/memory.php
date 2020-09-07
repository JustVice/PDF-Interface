<?php

// Only user_authenticated is needed to validate if 
// user has authenticated.
if(!isset($_SESSION["user_authenticated"])){
    $_SESSION["user_authenticated"] = False; // Variable is always created as False.
}
