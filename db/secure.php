<?php
session_start();


// lecture des droits dans session de l'utilisateur
if (! empty($_SESSION["id"])) {
    $id = $_SESSION["id"];
    
} else {
    //session_unset();
    echo '';
}

if (! empty($_SESSION["password"])) {
    $password = $_SESSION["password"];
    
} else {
    //session_unset();
    echo '';
}
if (! empty($_SESSION["date"])) {
    $date = $_SESSION["date"];
    
} else {
    //session_unset();
    echo '';
}

if (! empty($_SESSION["pseudo"])) {
    $pseudo = $_SESSION["pseudo"];
    
} else {
    //session_unset();
    echo '';
}

if (! empty($_SESSION["email"])) {
    $email = $_SESSION["email"];
    
} else {
    //session_unset();
    echo '';
}

if (! empty($_SESSION["role"])) {
    $role = $_SESSION["role"];
    
} else {
    //session_unset();
    echo '';
}


session_write_close();




?>
