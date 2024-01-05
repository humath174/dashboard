<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer la base de données sélectionnée
    $selected_db = $_POST["db_name"];

    // Connexion à la base de données sélectionnée
    $serveur = "localhost";
    $utilisateur = "monty";
    $motDePasse = "some_pass";

    // Utilisez le nom de la base de données sélectionnée
    $baseDeDonnees = $selected_db;

    $connexion = new mysqli($serveur, $utilisateur, $motDePasse, $baseDeDonnees);

    // Vérifier la connexion
    if ($connexion->connect_error) {
        die("La connexion à la base de données a échoué : " . $connexion->connect_error);
    }

    // Récupérer les utilisateurs depuis la table "utilisateurs"
    $requete_utilisateurs = "SELECT * FROM users";
    $resultat_utilisateurs = $connexion->query($requete_utilisateurs);

    // Ajouter un utilisateur
    if (isset($_POST['ajouter_utilisateur'])) {
        $nom_utilisateur = $_POST['nom_utilisateur'];
        $mot_de_passe = password_hash($_POST['mot_de_passe'], PASSWORD_DEFAULT);

        $requete_ajout_utilisateur = "INSERT INTO users (nom_utilisateur, mot_de_passe) VALUES ('$nom_utilisateur', '$mot_de_passe')";
        $connexion->query($requete_ajout_utilisateur);
    }

    // Supprimer un utilisateur
    if (isset($_POST['supprimer_utilisateur'])) {
        $id_utilisateur = $_POST['id_utilisateur'];

        $requete_suppression_utilisateur = "DELETE FROM users WHERE id = $id_utilisateur";
        $connexion->query($requete_suppression_utilisateur);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Utilisateurs</title>
    <style>
        /* Styles CSS ici si nécessaire */
    </style>
</head>
<body>

<h1>Utilisateurs de la Base de Données <?php echo $selected_db; ?></h1>

<?php
if (isset($resultat_utilisateurs) && $resultat_utilisateurs->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>ID</th><th>Nom Utilisateur</th><th>Mot de Passe</th><th>Action</th></tr>";

    while ($utilisateur = $resultat_utilisateurs->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $utilisateur['id'] . "</td>";
        echo "<td>" . $utilisateur['nom_utilisateur'] . "</td>";
        echo "<td>" . $utilisateur['mot_de_passe'] . "</td>";
        echo "<td>";
        echo "<form action='' method='post'>";
        echo "<input type='hidden' name='db_name' value='$selected_db'>";
        echo "<input type='hidden' name='id_utilisateur' value='" . $utilisateur['id'] . "'>";
        echo "<input type='submit' name='supprimer_utilisateur' value='Supprimer'>";
        echo "</form>";
        echo "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Aucun utilisateur trouvé.";
}
?>

<h2>Ajouter un Utilisateur</h2>
<form action="" method="post">
    <input type="hidden" name="db_name" value="<?php echo $selected_db; ?>">
    <label for="nom_utilisateur">Nom d'utilisateur :</label>
    <input type="text" name="nom_utilisateur" required>
    <label for="mot_de_passe">Mot de Passe :</label>
    <input type="password" name="mot_de_passe" required>
    <input type="submit" name="ajouter_utilisateur" value="Ajouter">
</form>

</body>
</html>
