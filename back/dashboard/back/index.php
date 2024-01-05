<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Utilisateurs</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            color: #333;
        }
        form {
            margin-bottom: 20px;
        }
        select {
            margin-right: 10px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>

<h1>Gestion des Utilisateurs</h1>

<form action="gestion_utilisateurs.php" method="post">
    <label for="db_name">Choisir la Base de Données :</label>
    <select name="db_name" id="db_name">
        <option value="bbra">Bbra</option>
        <option value="base2">Base de Données 2</option>
        <!-- Ajoutez d'autres options selon vos bases de données -->
    </select>
    <input type="submit" value="Afficher Utilisateurs">
</form>

</body>
</html>
