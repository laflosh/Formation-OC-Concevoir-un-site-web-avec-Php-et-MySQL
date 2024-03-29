<?php
    require_once(__DIR__."/lib/fonctions.php");
    $isExist = checkElementForm();
    $file = checkFile();
    $postData = $_POST;
    $isFile = isset($file);
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

            <?php if($isExist && $isFile === true) { ?>

                <h1>Message bien reçu !</h1>

                <div class="card">

                    <div class="card-body">

                        <h2 class="card-title">Rappel de vos informations</h2>

                        <p class="card-text"><b>Email</b> : <?php echo $postData['email'] ?></p>
                        <p class="card-text"><b>Message</b> : <?php echo $postData['message'] ?></p>

                        <div class="card">

                            <p class="card-text"><b>Votre image</b> : </p>
                            <img src=<?php echo $file ?> title="Image"/>

                        </div>

                    </div>

                </div>


            <?php } elseif($isExist) { ?>

                <div class="card">

                    <div class="card-body">

                        <h2 class="card-title">Rappel de vos informations</h2>

                        <p class="card-text"><b>Email</b> : <?php echo $postData['email'] ?></p>
                        <p class="card-text"><b>Message</b> : <?php echo $postData['message'] ?></p>


                    </div>

                </div>
            
            <?php } else { ?>

                <p>Il faut un email et un message pour soumettre le formulaire.</p>

            <?php } ?>

        </div>

        <?php require_once(__DIR__."/inclut/footer.php");?>

    </body>

</html>