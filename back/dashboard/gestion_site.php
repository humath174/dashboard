<?php
// Récupérer l'ID du site à partir des paramètres de l'URL
$site_id = $_GET['site_id'];

// Simulation de données spécifiques au site
$siteInfo = [
    'nom_site' => 'Site de Test',
    'url_site' => 'https://site.test',
    'description' => 'Description du site de test.'
];

// Afficher les informations du site
echo "<!DOCTYPE html>";
echo "<html lang='en'>";
echo "<head>";
echo "    <meta charset='UTF-8'>";
echo "    <meta name='viewport' content='width=device-width, initial-scale=1.0'>";
echo "    <title>Gestion du Site</title>";
echo "</head>";
echo "<body>";

echo "<h2>Gestion du Site :</h2>";
echo "<p>Nom du site : " . $siteInfo['nom_site'] . "</p>";
echo "<p>URL du site : " . $siteInfo['url_site'] . "</p>";
echo "<p>Description : " . $siteInfo['description'] . "</p>";

echo "</body>";
echo "</html>";
?>
