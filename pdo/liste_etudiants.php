<?php
require 'config.php';

try {
    $stmt = $pdo->query("SELECT * FROM etudiants");  
    $etudiants = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die('❌ Erreur : ' . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Liste des étudiants</title>
</head>
<body class="container mt-4">
    <h2>📦 Liste des étudiants</h2>
    <a href="test_get.html">Creer un nouvel etudiant</a>
    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prénom</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($etudiants)) : ?>
                <?php foreach ($etudiants as $etudiant) : ?>
                    <tr>
                        <td><?= htmlspecialchars($etudiant['id']); ?></td>
                        <td><?= htmlspecialchars($etudiant['nom']); ?></td>
                        <td><?= htmlspecialchars($etudiant['prenom']); ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else : ?>
                <tr>
                    <td colspan="3" class="text-center">Aucun étudiant trouvé.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>
