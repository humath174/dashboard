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
<?php
// Connexion à la base de données
include('database.php');


$connexion = new mysqli($serveur, $utilisateur, $motDePasse, $baseDeDonnees);

if ($connexion->connect_error) {
    die("La connexion à la base de données a échoué : " . $connexion->connect_error);
}

// Traitement de la soumission du formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupère les données du formulaire
    $titre = $connexion->real_escape_string($_POST['titre']);
    $description = $connexion->real_escape_string($_POST['description']);

    // Vérifie si un fichier a été téléchargé
    if(isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        // Lit le contenu du fichier
        $imageData = file_get_contents($_FILES['image']['tmp_name']);
        // Échappe les caractères spéciaux pour éviter les injections SQL
        $imageData = $connexion->real_escape_string($imageData);

        // Insère les données dans la base de données
        $insertQuery = "INSERT INTO realisation (titre, description, image_data) VALUES ('$titre', '$description', '$imageData')";
        $result = $connexion->query($insertQuery);

        if ($result) {
            echo "L'image a été téléchargée avec succès. <a href='dashboard-réal.php'>Retourner sur le dashboard</a>";
        } else {
            echo "Une erreur est survenue lors du téléchargement de l'image : " . $connexion->error;
        }
    } else {
        echo "Veuillez sélectionner une image à télécharger.";
    }
}

// Ferme la connexion à la base de données
$connexion->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demande de contact</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
          <?php
include ('component/head.php')
 ?>
</head>

<body class="bg-content">
<main class="dashboard d-flex">
    <!-- start sidebar -->
    <?php
    include "component/sidebar.php";
    ?>
    <!-- end sidebar -->

    <!-- start content page -->
    <div class="container-fluid px-4">
        <?php
        include "component/header.php";
        ?>


        <!-- start student list table -->
        <form action="réa-chr.php" method="post" enctype="multipart/form-data">
            <label for="titre">Titre :</label>
            <input type="text" name="titre" required><br>

            <label for="description">Description :</label>
            <textarea name="description" required></textarea><br>

            <label for="image">Sélectionnez une image :</label>
            <input type="file" name="image" required><br>

            <input type="submit" value="Envoyer">
        </form>
        <!-- end student list table -->
    </div>
    <!-- end content page -->
</main>
<script src="js/script.js"></script>
<script src="js/bootstrap.bundle.js"></script>
</body>

</html>
