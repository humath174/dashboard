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
    <meta name="description" content="Bruno Broyer Reflets Amenagements" />
    <meta name="keywords" content="pisciniste, bruno broyer reflets amenagements, bruno broyer, amenagements, piscine chatillon sur chalaronne, chatillon sur chalaronne, ain, rhone, auvergne rhone-alpes" />
    <meta name="author" content="DigitalGroup" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/style-nav.css">

    <!--
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
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-5TXPSHGCFL"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-5TXPSHGCFL');
</script>

<body>
<section class="app">
    <aside class="sidebar">
        <header>
            Menu
        </header>
        <nav class="sidebar-nav">

            <ul>
                <li>
                    <a href="#"><i class="ion-bag"></i> <span>Shop</span></a>
                    <ul class="nav-flyout">
                        <li>
                            <a href="#"><i class="ion-ios-color-filter-outline"></i>Derps</a>
                        </li>
                        <li>
                            <a href="#"><i class="ion-ios-clock-outline"></i>Times</a>
                        </li>
                        <li>
                            <a href="#"><i class="ion-android-star-outline"></i>Hates</a>
                        </li>
                        <li>
                            <a href="#"><i class="ion-heart-broken"></i>Beat</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="ion-ios-settings"></i> <span class="">Controls</span></a>
                    <ul class="nav-flyout">
                        <li>
                            <a href="#"><i class="ion-ios-alarm-outline"></i>Watch</a>
                        </li>
                        <li>
                            <a href="#"><i class="ion-ios-camera-outline"></i>Creeper</a>
                        </li>
                        <li>
                            <a href="#"><i class="ion-ios-chatboxes-outline"></i>Hate</a>
                        </li>
                        <li>
                            <a href="#"><i class="ion-ios-cog-outline"></i>Grinder</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="ion-ios-briefcase-outline"></i> <span class="">Folio</span></a>
                    <ul class="nav-flyout">
                        <li>
                            <a href="#"><i class="ion-ios-flame-outline"></i>Burn</a>
                        </li>
                        <li>
                            <a href="#"><i class="ion-ios-lightbulb-outline"></i>Bulbs</a>
                        </li>
                        <li>
                            <a href="#"><i class="ion-ios-location-outline"></i>Where You</a>
                        </li>
                        <li>
                            <a href="#"><i class="ion-ios-locked-outline"></i>On Lock</a>
                        </li>
                        <li>
                            <a href="#"><i class="ion-ios-navigate-outline"></i>Ghostface</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="ion-ios-analytics-outline"></i> <span class="">Graphicals</span></a>
                    <ul class="nav-flyout">
                        <li>
                            <a href="#"><i class="ion-ios-timer-outline"></i>Timers</a>
                        </li>
                        <li>
                            <a href="#"><i class="ion-arrow-graph-down-left"></i>You Lose</a>
                        </li>
                        <li>
                            <a href="#"><i class="ion-ios-partlysunny-outline"></i>Stormy</a>
                        </li>
                        <li>
                            <a href="#"><i class="ion-ios-timer-outline"></i>Lookie Look</a>
                        </li>
                        <li>
                            <a href="#"><i class="ion-ios-game-controller-a-outline"></i>Dork Mfer</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="ion-ios-paper-outline"></i> <span class="">Papers</span></a>
                    <ul class="nav-flyout">
                        <li>
                            <a href="#"><i class="ion-ios-filing-outline"></i>File Cab</a>
                        </li>
                        <li>
                            <a href="#"><i class="ion-ios-information-outline"></i>Infos</a>
                        </li>
                        <li>
                            <a href="#"><i class="ion-ios-paperplane-outline"></i>Planes</a>
                        </li>
                        <li>
                            <a href="#"><i class="ion-android-star-outline"></i>Shop</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="ion-ios-navigate-outline"></i> <span class="">Ass Finder</span></a>
                    <ul class="nav-flyout">
                        <li>
                            <a href="#"><i class="ion-ios-flame-outline"></i>Burn</a>
                        </li>
                        <li>
                            <a href="#"><i class="ion-ios-lightbulb-outline"></i>Bulbs</a>
                        </li>
                        <li>
                            <a href="#"><i class="ion-ios-location-outline"></i>Where You</a>
                        </li>
                        <li>
                            <a href="#"><i class="ion-ios-locked-outline"></i>On Lock</a>
                        </li>
                        <li>
                            <a href="#"><i class="ion-ios-navigate-outline"></i>Ghostface</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="ion-ios-medical-outline"></i> <span class="">Cocaine</span></a>
                </li>
            </ul>
        </nav>
    </aside>
</section>
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

