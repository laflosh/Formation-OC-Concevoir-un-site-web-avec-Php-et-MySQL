<?php

session_start();

require_once(__DIR__ . '/_isConnect.php');
require_once(__DIR__ . '/config/mysql.php');
require_once(__DIR__ . '/sql/databaseconnect.php');
require_once(__DIR__ . '/lib/fonctions.php');


$postData = $_POST;

if (!isset($postData['id']) || !is_numeric($postData['id'])) {
    echo 'Il faut un identifiant valide pour supprimer une recette.';
    return;
}

$deleteRecipeStatement = $mysqlClient->prepare('DELETE FROM recipes WHERE recipe_id = :id');
$deleteRecipeStatement->execute([
    'id' => (int)$postData['id'],
]);

redirectToUrl('index.php');

?>