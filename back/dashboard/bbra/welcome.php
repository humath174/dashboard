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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <meta name="description" content="Bruno Broyer Reflets Amenagements" />
    <meta name="keywords" content="pisciniste, bruno broyer reflets amenagements, bruno broyer, amenagements, piscine chatillon sur chalaronne, chatillon sur chalaronne, ain, rhone, auvergne rhone-alpes" />
    <meta name="author" content="DigitalGroup" />
    <link rel="stylesheet" href="/css/style-nav.css">
    <script type="text/javascript" src="/js/annim.js"></script>




    <!--
    <link rel="stylesheet" href="/css/style-nav.css">
    <script type="text/javascript" src="/js/annim.js"></script>
    <link rel="stylesheet" href="style.css">  Lien vers le fichier CSS externe

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
<!--Main Navigation-->
<header>
    <!-- Sidebar -->
    <nav
            id="sidebarMenu"
            class="collapse d-lg-block sidebar collapse bg-white"
    >
        <div class="position-sticky">
            <div class="list-group list-group-flush mx-3 mt-4">
                <a
                        href="#"
                        class="list-group-item list-group-item-action py-2 ripple"
                        aria-current="true"
                >
                    <i class="fas fa-tachometer-alt fa-fw me-3"></i
                    ><span>Main dashboard</span>
                </a>
                <a
                        href="#"
                        class="list-group-item list-group-item-action py-2 ripple active"
                >
                    <i class="fas fa-chart-area fa-fw me-3"></i
                    ><span>Webiste traffic</span>
                </a>
                <a
                        href="#"
                        class="list-group-item list-group-item-action py-2 ripple"
                ><i class="fas fa-lock fa-fw me-3"></i><span>Password</span></a
                >
                <a
                        href="#"
                        class="list-group-item list-group-item-action py-2 ripple"
                ><i class="fas fa-chart-line fa-fw me-3"></i
                    ><span>Analytics</span></a
                >
                <a
                        href="#"
                        class="list-group-item list-group-item-action py-2 ripple"
                >
                    <i class="fas fa-chart-pie fa-fw me-3"></i><span>SEO</span>
                </a>
                <a
                        href="#"
                        class="list-group-item list-group-item-action py-2 ripple"
                ><i class="fas fa-chart-bar fa-fw me-3"></i><span>Orders</span></a
                >
                <a
                        href="#"
                        class="list-group-item list-group-item-action py-2 ripple"
                ><i class="fas fa-globe fa-fw me-3"></i
                    ><span>International</span></a
                >
                <a
                        href="#"
                        class="list-group-item list-group-item-action py-2 ripple"
                ><i class="fas fa-building fa-fw me-3"></i
                    ><span>Partners</span></a
                >
                <a
                        href="#"
                        class="list-group-item list-group-item-action py-2 ripple"
                ><i class="fas fa-calendar fa-fw me-3"></i
                    ><span>Calendar</span></a
                >
                <a
                        href="#"
                        class="list-group-item list-group-item-action py-2 ripple"
                ><i class="fas fa-users fa-fw me-3"></i><span>Users</span></a
                >
                <a
                        href="#"
                        class="list-group-item list-group-item-action py-2 ripple"
                ><i class="fas fa-money-bill fa-fw me-3"></i><span>Sales</span></a
                >
            </div>
        </div>
    </nav>
    <!-- Sidebar -->

    <!-- Navbar -->
    <nav
            id="main-navbar"
            class="navbar navbar-expand-lg navbar-light bg-white fixed-top"
    >
        <!-- Container wrapper -->
        <div class="container-fluid">
            <!-- Toggle button -->
            <button
                    class="navbar-toggler"
                    type="button"
                    data-mdb-toggle="collapse"
                    data-mdb-target="#sidebarMenu"
                    aria-controls="sidebarMenu"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
            >
                <i class="fas fa-bars"></i>
            </button>

            <!-- Brand -->
            <a class="navbar-brand" href="#">
                <img
                        src="https://mdbootstrap.com/img/logo/mdb-transaprent-noshadows.png"
                        height="25"
                        alt=""
                        loading="lazy"
                />
            </a>
            <!-- Search form -->
            <form class="d-none d-md-flex input-group w-auto my-auto">
                <input
                        autocomplete="off"
                        type="search"
                        class="form-control rounded"
                        placeholder='Search (ctrl + "/" to focus)'
                        style="min-width: 225px"
                />
                <span class="input-group-text border-0"
                ><i class="fas fa-search"></i
                    ></span>
            </form>

            <!-- Right links -->
            <ul class="navbar-nav ms-auto d-flex flex-row">
                <!-- Notification dropdown -->
                <li class="nav-item dropdown">
                    <a
                            class="nav-link me-3 me-lg-0 dropdown-toggle hidden-arrow"
                            href="#"
                            id="navbarDropdownMenuLink"
                            role="button"
                            data-mdb-toggle="dropdown"
                            aria-expanded="false"
                    >
                        <i class="fas fa-bell"></i>
                        <span class="badge rounded-pill badge-notification bg-danger"
                        >1</span
                        >
                    </a>
                    <ul
                            class="dropdown-menu dropdown-menu-end"
                            aria-labelledby="navbarDropdownMenuLink"
                    >
                        <li><a class="dropdown-item" href="#">Some news</a></li>
                        <li><a class="dropdown-item" href="#">Another news</a></li>
                        <li>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </li>
                    </ul>
                </li>

                <!-- Icon -->
                <li class="nav-item">
                    <a class="nav-link me-3 me-lg-0" href="#">
                        <i class="fas fa-fill-drip"></i>
                    </a>
                </li>
                <!-- Icon -->
                <li class="nav-item me-3 me-lg-0">
                    <a class="nav-link" href="#">
                        <i class="fab fa-github"></i>
                    </a>
                </li>

                <!-- Icon dropdown -->
                <li class="nav-item dropdown">
                    <a
                            class="nav-link me-3 me-lg-0 dropdown-toggle hidden-arrow"
                            href="#"
                            id="navbarDropdown"
                            role="button"
                            data-mdb-toggle="dropdown"
                            aria-expanded="false"
                    >
                        <i class="united kingdom flag m-0"></i>
                    </a>
                    <ul
                            class="dropdown-menu dropdown-menu-end"
                            aria-labelledby="navbarDropdown"
                    >
                        <li>
                            <a class="dropdown-item" href="#"
                            ><i class="united kingdom flag"></i>English
                                <i class="fa fa-check text-success ms-2"></i
                                ></a>
                        </li>
                        <li><hr class="dropdown-divider" /></li>
                        <li>
                            <a class="dropdown-item" href="#"
                            ><i class="poland flag"></i>Polski</a
                            >
                        </li>
                        <li>
                            <a class="dropdown-item" href="#"
                            ><i class="china flag"></i>中文</a
                            >
                        </li>
                        <li>
                            <a class="dropdown-item" href="#"
                            ><i class="japan flag"></i>日本語</a
                            >
                        </li>
                        <li>
                            <a class="dropdown-item" href="#"
                            ><i class="germany flag"></i>Deutsch</a
                            >
                        </li>
                        <li>
                            <a class="dropdown-item" href="#"
                            ><i class="france flag"></i>Français</a
                            >
                        </li>
                        <li>
                            <a class="dropdown-item" href="#"
                            ><i class="spain flag"></i>Español</a
                            >
                        </li>
                        <li>
                            <a class="dropdown-item" href="#"
                            ><i class="russia flag"></i>Русский</a
                            >
                        </li>
                        <li>
                            <a class="dropdown-item" href="#"
                            ><i class="portugal flag"></i>Português</a
                            >
                        </li>
                    </ul>
                </li>

                <!-- Avatar -->
                <li class="nav-item dropdown">
                    <a
                            class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center"
                            href="#"
                            id="navbarDropdownMenuLink"
                            role="button"
                            data-mdb-toggle="dropdown"
                            aria-expanded="false"
                    >
                        <img
                                src="https://mdbootstrap.com/img/Photos/Avatars/img (31).jpg"
                                class="rounded-circle"
                                height="22"
                                alt=""
                                loading="lazy"
                        />
                    </a>
                    <ul
                            class="dropdown-menu dropdown-menu-end"
                            aria-labelledby="navbarDropdownMenuLink"
                    >
                        <li><a class="dropdown-item" href="#">My profile</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->
</header>
<!--Main Navigation-->

<!--Main layout-->
<main style="margin-top: 58px">
    <div class="container pt-4">

    </div>
</main>

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

