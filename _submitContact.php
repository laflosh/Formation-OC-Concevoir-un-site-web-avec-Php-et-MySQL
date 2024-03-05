<?php
    require_once(__DIR__."/lib/fonctions.php");
    $isExist = urlParamExist();
?>
<!DOCTYPE html>

<html>

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Informations contact</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
        >

    </head>
    
    <body>

        <div class="container">

            <?php require_once(__DIR__."/inclut/header.php");?>

            <h1>Message bien reçu !</h1>
        
            <div class="card">
                
                <div class="card-body">

                    <h2 class="card-title">Rappel de vos informations</h2>

                    <?php
                        if($isExist === false) {

                            echo "Il faut un email et un message pour soumettre le formulaire.";

                        } else {

                            echo "
                            <p class=\"card-text\"><b>Email</b> : {$_GET['email']}</p>
                            <p class=\"card-text\"><b>Message</b> : {$_GET['message']}</p>
                            ";
                        }
                    ?>

                </div>

            </div>

        </div>

        <?php require_once(__DIR__."/inclut/footer.php");?>

    </body>

</html>