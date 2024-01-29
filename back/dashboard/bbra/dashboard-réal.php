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

// Récupère les données des images depuis la base de données
$selectQuery = "SELECT * FROM realisation";
$result = $connexion->query($selectQuery);

// Traitement de la suppression d'image
if (isset($_POST['delete'])) {
    $imageIdToDelete = $_POST['image_id'];

    // Supprime l'image de la base de données
    $deleteQuery = "DELETE FROM realisation WHERE id = $imageIdToDelete";
    $deleteResult = $connexion->query($deleteQuery);

    if ($deleteResult) {
        echo "L'image a été supprimée avec succès.";
    } else {
        echo "Une erreur est survenue lors de la suppression de l'image : " . $connexion->error;
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
        <div class="student-list-header d-flex justify-content-between align-items-center py-2">
            <div class="title h6 fw-bold">Demande de contact</div>
            <div class="btn-add d-flex gap-3 align-items-center">
                <div class="short">
                    <i class="far fa-sort"></i>
                </div>
                <?php include 'component/popupadd.php'; ?>
            </div>
        </div>
        <table>
            <tr>
                <th>Image</th>
                <th>Action</th>
            </tr>
            <?php
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                // Affiche l'aperçu de l'image dans une cellule du tableau
                echo "<td><img src='data:image/jpeg;base64," . base64_encode($row['image_data']) . "' alt='" . $row['image_name'] . "'></td>";

                // Affiche le bouton de suppression dans une cellule du tableau
                echo "<td>
                <form method='post' action='dashboard-réal.php'>
                    <input type='hidden' name='image_id' value='" . $row['id'] . "'>
                    <input type='submit' name='delete' value='Supprimer'>
                </form>
              </td>";

                echo "</tr>";
            }
            ?>
        </table>
        <!-- end student list table -->
    </div>
    <!-- end content page -->
</main>
<script src="js/script.js"></script>
<script src="js/bootstrap.bundle.js"></script>
</body>

</html>