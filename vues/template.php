<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./styles/styles.css" rel="stylesheet">
    <title>Green Garden</title>
</head>

<body id="body">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand">Green Garden</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Accueil</a>
                        </li>
                        <?php if ($_SESSION != null) {
                            if($_SESSION['userType'] == 2) { ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Compte
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="index.php?action=addproduct">Ajouter un produit</a></li>
                                    <li><a class="dropdown-item" href="index.php?action=addcategories">Ajouter categorie</a></li>
                                    
                                    <li><a class="dropdown-item" href="index.php?action=deconnexion">Déconnexion</a></li>
                                </ul>
                            </li>

                        <?php } } else { ?>
                            <form method="get" action="index.php"> 
                        <input type="hidden" name="action" value="connexion">
    <input type="submit"   value="Connexion">
</form>


                        <?php } ?>
                    </ul>
                        
                        
                    </ul>
                    <button class="btn btn-success" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-cart" viewBox="0 0 16 16">
                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
                        </svg>Panier</button>


                </div>
            </div>

        </nav>
    </header>

    <main class="container"  id="contenu">
        
     <?php print $contenu; ?>

    </main>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasRightLabel">Mon panier</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
        </div>
    </div>



    <div class="footerParent">
        <footer class="navbar navbar-expand-lg bg-dark text-white mt-5 ">
            <div class="container-fluid d-flex justify-content-center ">
                <span class="navbar-brand text-white fs-6 text">© 2023 CHARBERET Clément</span>
            </div>
        </footer>
    </div>
</body>

</html>