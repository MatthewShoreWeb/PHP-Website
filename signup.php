<?php

// Checks if the user accessed the page correctly. 
// Checks against the name attribute of the HTML element.
if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    require_once 'databaseHandler/php';
    require_once 'functions.php';


    if (!checkEmpty($username, $password) && !checkInputs($username, $password)) {

    } else {
        
    }

    createUser($conn, $username, $password);

} else {
    // send user back to home page.
    header("location: index.php");
}


?>
