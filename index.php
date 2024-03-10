<?php
session_start();
require_once(__DIR__."/lib/variables.php");
require_once(__DIR__."/lib/fonctions.php");
?>
<!DOCTYPE html>

<html>

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Affichage des recettes</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
        >

    </head>
    
    <body class="d-flex flex-column min-vh-100">

        <div class="container">

            <?php require_once(__DIR__."/inclut/header.php");?>

            <h1>Recettes</h1>
            
            <p>
                Retrouver toutes nos recettes de cuisines.<br />
            </p>

            <!--Formulaire de connexion-->
            <?php require_once(__DIR__."/_login.php")?>

            <?php foreach(getRecipes($recettes) as $recette) { ?>
    
                <article>

                    <h2> <?php echo $recette["titre"] ?> </h2>
    
                    <div> <?php echo $recette["recette"] ?></div>
                    <i> <?php echo displayAuthor($recette["auteur"] , $users) ?> </i>

                </article>


            <?php } ?>

        </div>

        <?php require_once(__DIR__."/inclut/footer.php");?>

    </body>

</html>