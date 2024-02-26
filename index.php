<?php
    $recettes = [
        [
            "titreRecette" => "Poulet Tikka Masala",
            "auteurRecette" => "Emma Dupont"
        ],
        [
            "titreRecette" => "Tarte Tatin aux Pommes",
            "auteurRecette" => "Lucas Martin"
        ],
        [
            "titreRecette" => "Spaghetti Carbonara",
            "auteurRecette" => "Sophia Rodriguez"
        ],
        [
            "titreRecette" => "Chili Con Carne",
            "auteurRecette" => "Antoine Leroy"
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

    </head>
    
    <body>

        <h1>Recettes</h1>
        
        <p>
            Retrouver toutes nos recettes de cuisines.<br />
        </p>

        <ul>

            <?php 
                for($counter = 0; $counter < count($recettes); $counter++):
            ?>

            <li>

                <h2><?php echo $recettes[$counter]["titreRecette"]?></h2>
                <p><?php echo $recettes[$counter]["auteurRecette"]?></p>

            </li>

            <?php
                endfor; 
            ?>

        </ul>

    </body>

</html>