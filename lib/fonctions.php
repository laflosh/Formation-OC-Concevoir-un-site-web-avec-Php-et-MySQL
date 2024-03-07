<?php

    //Vérifie la disponibilitée d'une recette
    function isValidRecipe(array $recipe) : bool
    {
        if(array_key_exists("disponible", $recipe)){

        $isEnibled = $recipe["disponible"];

        } else {

            $isEnibled = false;
        
        }

        return $isEnibled;
    }

    //Récupère les recettes en fonctions de leurs disponibilitées
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

    //Affiche le nom complet et l'age de l'auteur de la recette
    function displayAuthor (string $authorEmail, array $users) : string 
    {

        foreach($users as $user) {

            if($authorEmail === $user["email"]) {

                return $user["fullname"] . ' (' . $user["age"] . 'ans)';

            }

        }

        return "Auteur inconnu";

    }

    //Vérifie l'existence et le bon format des données
    //lors de la validation du formulaire de contact
    function checkElementForm()
    {
        $postdata = $_POST;

        if(
            !isset($postdata["email"]) 
            || !filter_var($postdata["email"], FILTER_VALIDATE_EMAIL)
            || empty($postdata["message"])
            || trim($postdata["message"]) === ""
            ) {

            return false;
        }

        return true;

    }

    function checkFile()
    {

        // Testons si le fichier a bien été envoyé et s'il n'y a pas des erreurs
        if (isset($_FILES["screenshot"]) && $_FILES["screenshot"]["error"] == 0) {

            // Testons, si le fichier est trop volumineux
            if ($_FILES["screenshot"]["size"] > 1000000) {

                echo "L'envoie n'a pas pu être effectué, erreur ou image trop volumineuse";
                return;

            }

            //  // Testons, si l'extension n'est pas autorisée
            // $fileinfo = pathinfo($_FILES["screenshot"]["name"]);
            // $extension = $fileinfo["extension"];
            // $allowExtension = ["jpg", "jpeg", "gif", "png"];

            // if (!in_array($extension, $allowExtension)) {

            //     echo "L'envoie du fichier n'a pas pu être effectué, l'extension {$extension} n'est pas autorisé";
            //     return;
            // }

            //Testons, si le dossier uploads est manquant
            $path = dirname(__DIR__).'/uploads/';
            if (!is_dir($path)) {

                echo "L'envoi n'a pas pu être effectué, le dossier uploads est manquant";
                return;

            }

            // On peut valider le fichier et le stocker définitivement
            $pathImg = $path . basename($_FILES['screenshot']['name']);
            move_uploaded_file($_FILES['screenshot']['tmp_name'], $pathImg);

            $showImg = "uploads/" . basename($_FILES['screenshot']['name']);

            return $showImg;

        }

    }
?>