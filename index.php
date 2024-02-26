<!DOCTYPE html>

<html>

    <head>

        <title>Ceci est une page de test avec des balises PHP</title>
        <meta charset="utf-8" />

    </head>
    
    <body>

        <h2>Page de test</h2>
        
        <p>
            Cette page contient du code HTML avec des balises PHP.<br />
            <?php 
                echo("Celle-ci a été entiérement écrite en PHP.<br/>");
            ?>
            Voici quelques petits tests :
            Aujourd'hui nous sommes le <?php echo date("d/m/y h:i:s")?>
        </p>
        
        <ul>

            <li style="color: blue;">Texte en bleu</li>
            <li style="color: red;">Texte en rouge</li>
            <li style="color: green;">Texte en vert</li>

        </ul>
        
        <?php
        /* Encore du PHP
        Toujours du PHP */
        ?>

    </body>

</html>