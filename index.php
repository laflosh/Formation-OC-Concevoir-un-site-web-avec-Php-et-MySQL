<?php
    $recettes = [
        [
            "titreRecette" => "Poulet Tikka Masala",
            "auteurRecette" => "Emma Dupont",
            "recette" => "Etape 1: ...",
            "disponible" => true
        ],
        [
            "titreRecette" => "Tarte Tatin aux Pommes",
            "auteurRecette" => "Lucas Martin",
            "recette" => "Etape 1: ...",
            "disponible" => true
        ],
        [
            "titreRecette" => "Spaghetti Carbonara",
            "auteurRecette" => "Sophia Rodriguez",
            "recette" => "Etape 1: ...",
            "disponible" => false
        ],
        [
            "titreRecette" => "Chili Con Carne",
            "auteurRecette" => "Antoine Leroy",
            "recette" => "Etape 1: ...",
            "disponible" => true
        ]
    ];
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
    
    <body>

        <div class="container">

            <h1>Recettes</h1>
            
            <p>
                Retrouver toutes nos recettes de cuisines.<br />
            </p>


            <?php 

                for($counter = 0; $counter < count($recettes); $counter++){

                    $disponible = $recettes[$counter]["disponible"];

                    if($disponible){
                        echo ("            
                        <article>

                            <h2>{$recettes[$counter]["titreRecette"]}</h2>
            
                            <div>{$recettes[$counter]["recette"]}</div>
                            <i>{$recettes[$counter]["auteurRecette"]}</i>
        
                        </article>");
                    };
                };
            ?>

        </div>

    </body>

</html>