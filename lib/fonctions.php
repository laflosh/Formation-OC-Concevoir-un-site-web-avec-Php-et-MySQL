<?php

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

                return $user["fullname"] . ' (' . $user["age"] . 'ans)';

            }

        }

        return "Auteur inconnu";

    }
    
?>