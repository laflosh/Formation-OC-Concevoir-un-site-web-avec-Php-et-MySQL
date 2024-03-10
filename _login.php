<?php 
    require_once(__DIR__."/lib/variables.php");
    require_once(__DIR__."/lib/fonctions.php");
    $loggedUser = loginUser($users);
    $errorMessage = loginUser($users);
?>

<?php if(!isset($loggedUser)) { ?>

    <form action="index.php" method="POST">

        <?php if(isset($errorMessage)) { ?>

            <div class="alert alert-danger" role="alert">

                <?php echo $errorMessage; ?>

            </div>

        <?php } ?>

        <div class="mb-3">

            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="email-help" placeholder="you@exemple.com"/>
            <div id="email-help" class="form-text">L'émail utilisé lors de la création de compte.</div>

        </div>

        <div class="mb-3">

            <label for="password" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" id="password" name="password"/>

        </div>

        <button type="submit" class="btn btn-primary">Envoyer</button>

    </form>

<?php } else { ?>

    <div class="alert alert-success" role="alert">
        Bonjour <?php echo $loggedUser["email"]; ?> et bienvenue sur le site !
    </div>

<?php } ?>