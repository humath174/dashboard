<?php
// Démarrez la session
session_start();

// Vérifiez si la variable de session 'username' existe
if (isset($_SESSION['username'])) {
    // L'utilisateur a une session ouverte
} else {
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
    <link rel="stylesheet" href="/output.css">
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
    include 'pages/conixion.php';
    $nbr_students = $con->query("SELECT * FROM contact");
    $nbr_students = $nbr_students->rowCount();

    $nbr_cours = $con->query("SELECT * FROM devis");
    $nbr_cours = $nbr_cours->rowCount();

    $nbr_client = $con->query("SELECT * FROM client");
    $nbr_client = $nbr_client->rowCount();

    $nbr_img = $con->query("SELECT * FROM photos");
    $nbr_img = $nbr_img->rowCount();

    ?>
    <!-- end sidebar -->
</main>
<div class="ml-29">
  <h2>Essaien2</h2>
</div>
<h1>essaie</h1>
<script src="js/script.js"></script>
<script src="js/bootstrap.bundle.js"></script>
</body>

</html>