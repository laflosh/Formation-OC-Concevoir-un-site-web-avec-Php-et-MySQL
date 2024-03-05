<?php
    $recettes = [
        [
            "titreRecette" => "Poulet Tikka Masala",
            "auteurRecette" => "emma.dupont@test.fr",
            "recette" => "Etape 1: ...",
            "disponible" => true
        ],
        [
            "titreRecette" => "Tarte Tatin aux Pommes",
            "auteurRecette" => "lucas.martin@test.fr",
            "recette" => "Etape 1: ...",
            "disponible" => true
        ],
        [
            "titreRecette" => "Spaghetti Carbonara",
            "auteurRecette" => "sophia.rodriguez@test.fr",
            "recette" => "Etape 1: ...",
            "disponible" => false
        ],
        [
            "titreRecette" => "Chili Con Carne",
            "auteurRecette" => "antoine.leroy@test.fr",
            "recette" => "Etape 1: ...",
            "disponible" => true
        ]
    ];

    $users = [
        [
            "fullname" => "Emma Dupont",
            "email" => "emma.dupont@test.fr",
            "age" => 25,
        ],
        [
            "fullname" => "Lucas Martin",
            "email" => "lucas.martin@test.fr",
            "age" => 29,
        ],
        [
            "fullname" => "Sophia Rodriguez",
            "email" => "sophia.rodriguez@test.fr",
            "age" => 33,
        ],
        [
            "fullname" => "Antoine Leroy",
            "email" => "antoine.leroy@test.fr",
            "age" => 23,
        ]
    ];

    function isValidRecipe(array $recipe) : bool
    {
        if(array_key_exists("disponible", $recipe)){

        $isEnibled = $recipe["disponible"];

        } else {

            $isEnibled = false;
        
        }

        return $isEnibled;
    }

    function getRecipes(array $recipes) : array
    {
        $validRecipes = [];

        foreach($recipes as $recipe){
            if(isValidRecipe($recipe)){

                $validRecipes[] = $recipe;

            }
        }

        return $validRecipes;
    }

    function displayAuthor (string $authorEmail, array $users) : string 
    {

        foreach($users as $user) {

            if($authorEmail === $user["email"]) {

                return $user["fullname"] . '(' . $user["age"] . 'ans)';

            }

        }

    }
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


            <?php foreach(getRecipes($recettes) as $recette) : ?>
    
                <article>

                    <h2> <?php echo $recette["titreRecette"] ?> </h2>
    
                    <div> <?php echo $recette["recette"] ?></div>
                    <i> <?php echo displayAuthor($recette["auteurRecette"] , $users) ?> </i>

                </article>


            <?php endforeach?>

        </div>

    </body>

</html>