<?php
// Démarrez la session
session_start();

// Vérifiez si la variable de session 'username' existe
if (isset($_SESSION['username'])) {
    // L'utilisateur a une session ouverte
    echo "Bienvenue, " . $_SESSION['username'] . "!";
} else {
    // Redirigez l'utilisateur vers la page de connexion
    header("Location: connexion.php");
    exit(); // Assurez-vous d'arrêter l'exécution du script après la redirection
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="msvalidate.01" content="97522F7AC2412B9FEB60193A02ED6806" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bruno Broyer Reflets Amenagements</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <meta name="description" content="Bruno Broyer Reflets Amenagements" />
    <meta name="keywords" content="pisciniste, bruno broyer reflets amenagements, bruno broyer, amenagements, piscine chatillon sur chalaronne, chatillon sur chalaronne, ain, rhone, auvergne rhone-alpes" />
    <meta name="author" content="DigitalGroup" />




    <!--
    <link rel="stylesheet" href="/css/style-nav.css">
    <script type="text/javascript" src="/js/annim.js"></script>
    <link rel="stylesheet" href="style.css">  Lien vers le fichier CSS externe

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    Google tag (gtag.js)
    -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-5TXPSHGCFL"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-5TXPSHGCFL');
    </script>
</head>


<body>
<nav class="sidebar-navigation">
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <span class="fs-5 d-none d-sm-inline">Menu</span>
                    </a>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                        <li class="nav-item">
                            <a href="#" class="nav-link align-middle px-0">
                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                            </a>
                        </li>
                        <li>
                            <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span> </a>
                            <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 1 </a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 2 </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Orders</span></a>
                        </li>
                        <li>
                            <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                                <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline">Bootstrap</span></a>
                            <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 1</a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 2</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline">Products</span> </a>
                            <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 1</a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 2</a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 3</a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 4</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Customers</span> </a>
                        </li>
                    </ul>
                    <hr>
                    <div class="dropdown pb-4">
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                            <span class="d-none d-sm-inline mx-1">loser</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                            <li><a class="dropdown-item" href="#">New project...</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Sign out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col py-3">
                Content area...
            </div>
        </div>
    </div>
</nav>
<!-- Page content -->
<div class="main">
    ...
</div>


<div class="container">
    <h4 class="mt-4">Bienvenue sur l'Administration du site Bruno Broyer Reflets Amenagements</h4>

    <?php
    // Paramètres de connexion à la base de données
    include('database.php');

    // Créer une connexion à la base de données
    $connexion = new mysqli($serveur, $utilisateur, $motDePasse, $baseDeDonnees);

    // Vérifier la connexion
    if ($connexion->connect_error) {
        die("La connexion à la base de données a échoué : " . $connexion->connect_error);
    }

    // Récupérer les informations des trois dernières demandes de devis
    $requeteDevis = "SELECT * FROM devis ORDER BY date DESC LIMIT 3";
    $resultatDevis = $connexion->query($requeteDevis);

    if ($resultatDevis->num_rows > 0) {
        echo "<h2 class='mt-4'>Informations des Trois Dernières Demandes de Devis</h2>";
        echo "<table class='table'>";
        echo "<thead><tr><th>ID</th><th>Nom</th><th>Prenom</th><th>Mail</th><th>Telephone</th><th>Description</th></tr></thead><tbody>";

        // Afficher les informations des trois dernières demandes de devis dans le tableau
        while ($rowDevis = $resultatDevis->fetch_assoc()) {
            echo "<tr><td>" . $rowDevis["id"] . "</td><td>" . $rowDevis["nom"] . "</td><td>" . $rowDevis["prenom"] . "</td><td>" . $rowDevis["mail"] . "</td><td>" . $rowDevis["tel"] . "</td><td>" . $rowDevis["description"] . "</td></tr>";
        }

        echo "</tbody></table>";
    } else {
        echo "<p>Aucune demande de devis à afficher.</p>";
    }

    // Récupérer les informations des trois dernières demandes de contact
    $requeteContact = "SELECT * FROM contact ORDER BY date DESC LIMIT 3";
    $resultatContact = $connexion->query($requeteContact);

    if ($resultatContact->num_rows > 0) {
        echo "<h2 class='mt-4'>Informations des Trois Dernières Demandes de Contact</h2>";
        echo "<table class='table'>";
        echo "<thead><tr><th>ID</th><th>Nom</th><th>Prenom</th><th>Mail</th><th>Telephone</th><th>Description</th></tr></thead><tbody>";

        // Afficher les informations des trois dernières demandes de contact dans le tableau
        while ($rowContact = $resultatContact->fetch_assoc()) {
            echo "<tr><td>" . $rowContact["id"] . "</td><td>" . $rowContact["nom"] . "</td><td>" . $rowContact["prenom"] . "</td><td>" . $rowContact["mail"] . "</td><td>" . $rowContact["tel"] . "</td><td>" . $rowContact["description"] . "</td></tr>";
        }

        echo "</tbody></table>";
    } else {
        echo "<p>Aucune demande de contact à afficher.</p>";
    }

    // Fermer la connexion à la base de données
    $connexion->close();
    ?>
</div>

</body>

</html>

