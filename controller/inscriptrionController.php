<?php

require_once '../db/connexion.php';
require_once '../db/parametre.php';
require_once '../db/secure.php';


// Connecting with database
// if connecting is good, code following, or else, dont connect
$db = connect($config);
if ($db == null){
    echo "Revenez dans quelques instants";
} else {
    if (isset($_POST['btnInscrire'])) {
        // init differents var
        $email = $_POST['email'];
        $password = $_POST['password'];
        $pseudo = $_POST["pseudo"];
        $dateCreation = $_POST['dateCreation'];

            $password = password_hash($password, PASSWORD_DEFAULT);
            $select = $db->prepare("select email from user where email = :email");
            $select->bindValue('email', $email, PDO::PARAM_STR);
            $select->execute();
            // if email is already used, return email false
            if ($select->fetch() != null) {
                echo "Email déjà existant";
            }

        $insert = $db->prepare("insert into user(email, password, pseudo, dateCreation) values (:email, :password, :pseudo, :dateCreation)");
        $insert->bindValue('pseudo', $pseudo, PDO::PARAM_STR);
        $insert->bindValue('email', $email, PDO::PARAM_STR);
        $insert->bindValue('password', $password, PDO::PARAM_STR);
        date_default_timezone_set('Europe/Paris'); $date = date('y-m-d');
        $insert->bindValue('dateCreation', $date, PDO::PARAM_STR);
        $insert->execute();
        header('Location: //localhost/youtube/home.php');

    }
}
    ;
?>