<?php
session_start();
require_once 'database.phppoà'; // Assurez-vous d'avoir ce fichier avec les informations de connexion à la base de données

// Récupérer l'ID de l'utilisateur à partir des paramètres de l'URL
$utilisateur_id = $_GET['utilisateur_id'];

// Récupérer les informations de l'utilisateur depuis la base de données
$requete_info_utilisateur = "SELECT * FROM utilisateurs WHERE utilisateur_id = $utilisateur_id";
$resultat_info_utilisateur = $connexion->query($requete_info_utilisateur);

// Vérifier si l'utilisateur existe
if ($resultat_info_utilisateur->num_rows === 0) {
    echo "Utilisateur non trouvé.";
    exit();
}

$utilisateurInfo = $resultat_info_utilisateur->fetch_assoc();

// Récupérer les sites autorisés pour l'utilisateur depuis la base de données
$requete_sites_autorises = "SELECT s.site_id, s.nom_site, s.url_site FROM sites s
                            JOIN autorisations a ON s.site_id = a.site_id
                            WHERE a.utilisateur_id = $utilisateur_id";
$resultat_sites_autorises = $connexion->query($requete_sites_autorises);

// Afficher les informations de l'utilisateur
echo "<!DOCTYPE html>";
echo "<html lang='en'>";
echo "<head>";
echo "    <meta charset='UTF-8'>";
echo "    <meta name='viewport' content='width=device-width, initial-scale=1.0'>";
echo "    <title>Gestion de l'Utilisateur</title>";
echo "</head>";
echo "<body>";

echo "<h2>Gestion de l'Utilisateur :</h2>";
echo "<p>Nom d'utilisateur : " . $utilisateurInfo['nom_utilisateur'] . "</p>";
echo "<p>Email : " . $utilisateurInfo['email'] . "</p>";

echo "<h3>Sites Autorisés :</h3>";

echo "<ul>";

while ($siteAutorise = $resultat_sites_autorises->fetch_assoc()) {
    echo "<li>" . $siteAutorise['nom_site'] . " - <a href='#'>Révoquer l'accès</a></li>";
}

echo "</ul>";

// Ajouter un formulaire pour attribuer de nouveaux sites
echo "<h3>Ajouter un Site :</h3>";
echo "<form action='ajouter_site_utilisateur.php' method='post'>";
echo "<label for='nom_site'>Nom du Site :</label>";
echo "<input type='text' id='nom_site' name='nom_site' required>";
echo "<label for='url_site'>URL du Site :</label>";
echo "<input type='url' id='url_site' name='url_site' required>";
echo "<input type='hidden' name='utilisateur_id' value='" . $utilisateur_id . "'>";
echo "<input type='submit' value='Ajouter'>";
echo "</form>";

echo "</body>";
echo "</html>";
?>