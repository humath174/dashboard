<?php
// Démarrez la session
session_start();

// Vérifiez si la variable de session 'username' existe
if (isset($_SESSION['username'])) {
    // L'utilisateur a une session ouverte
     else {
    // Redirigez l'utilisateur vers la page de connexion
    header("Location: connexion.php");
    exit(); // Assurez-vous d'arrêter l'exécution du script après la redirection
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>
<body class="bg-content">
<main class="dashboard d-flex">
    <!-- start sidebar -->

    <!-- end sidebar -->

    <!-- start content page -->

<div class="container">
    <h4 class="mt-4">Bienvenue sur l'Administration du site Bruno Broyer Reflets Amenagements</h4>

    <?php
    // Paramètres de connexion à la base de données
    include('pages/conixion.php');

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

    <!-- end contentpage -->
</main>
<script src="js/script.js"></script>
<script src="js/bootstrap.bundle.js"></script>
</body>

</html>