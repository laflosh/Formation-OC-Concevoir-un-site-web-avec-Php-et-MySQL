<?php

    //Recettes enregistrées
    $sqlQueryRecettes = "SELECT * FROM recipes WHERE disponible = :disponible";
    $recettesStatement = $mysqlClient -> prepare($sqlQueryRecettes);
    $recettesStatement -> execute([
        "disponible" => 1,
    ]);
    $recettes = $recettesStatement -> fetchAll();

    //Informations utilisateurs inscrits
    $sqlQueryUsers = "SELECT * FROM users";
    $usersStatement = $mysqlClient -> prepare($sqlQueryUsers);
    $usersStatement -> execute();
    $users = $usersStatement -> fetchAll();
?>