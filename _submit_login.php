<?php
session_start();
require_once(__DIR__."/config/mysql.php");
require_once(__DIR__."/sql/databaseconnect.php");
require_once(__DIR__."/lib/fonctions.php");
require_once(__DIR__."/lib/variables.php");

//Validation du formulaire de connexion

$postData = $_POST;

if(isset($postData["email"]) && isset($postData["password"])) {
    if(!filter_var($postData["email"], FILTER_VALIDATE_EMAIL)) {

        $_SESSION["LOGIN_ERROR_MESSAGE"] = "Il faut un email valide pour soumettre le formulaire.";

    } else {

        foreach($users as $user) {
            if(
                $user["email"] === $postData["email"] &&
                $user["password"] === $postData["password"]
            ) {

                $_SESSION["LOGGED_USER"] = [
                    "email" => $user["email"],
                    "user_id" => $user["user_id"],
                ];

            }

        }

        if(!isset($_SESSION["LOGGED_USER"])) {

            $_SESSION["LOGIN_ERROR_MESSAGE"] = sprintf(
                'les Informations envoyées ne permettent pas de vous indentifier : (%s/%s)',
                $postData["email"],
                strip_tags($postData["password"])
            );

        }

    }

redirectToUrl("index.php");

}
?>