<header>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <div class="container-fluid">

            <a class="navbar-brand" href="index.php">Site de recettes</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

                <span class="navbar-toggler-icon"></span>

            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="_contact.php">Contact</a>
                    </li>

                    <?php if (isset($_SESSION['LOGGED_USER'])) { ?>
                    
                        <li class="nav-item">
                            <a class="nav-link" href="_recipes_create.php">Ajoutez une recette !</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="_logout.php">Déconnexion</a>
                        </li>

                    <?php } ?>

                </ul>

            </div>

        </div>

    </nav>
    
</header>