<?php
require 'config.php';

$stmt = $pdo->query("SELECT * FROM etudiants");
$etudiants = $stmt->fetchAll(PDO::FETCH_ASSOC);


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Liste des etudiants</title>
</head>
<body class="container mt-4">
    <h2>📦 Liste des etudiants</h2>
    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>nom</th>
                <table>prenom</table>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($etudiants as $etudiant) : ?>
                <tr>
                    <td><?= $etudiant['id']; ?></td>
                    <td><?= $etudiant['nom']; ?></td>
                    <td><?= $etudiant['prenom']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
