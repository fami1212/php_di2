<?php
// Inclusion de la configuration
require 'config.php';

try {
    // Exécutez la requête pour obtenir tous les produits
    $stmt = $pdo->query("SELECT * FROM products");
    $produits = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die('❌ Erreur : ' . $e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Produits</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7fc;
            margin: 0;
            padding: 0;
        }

        table {
            width: 80%;
            margin: 50px auto;
            border-collapse: collapse;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        thead {
            background-color: #007bff;
            color: white;
            text-align: left;
        }

        th, td {
            padding: 12px 15px;
            border: 1px solid #ddd;
            text-align: center;
        }

        th {
            font-size: 1.1em;
        }

        tbody tr:hover {
            background-color: #f1f1f1;
        }

        .no-data {
            text-align: center;
            font-size: 1.2em;
            color: #888;
        }

        .container {
            width: 90%;
            margin: 0 auto;
        }

        .btn {
            padding: 10px 20px;
            background-color: #28a745;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 1em;
            text-align: center;
            display: inline-block;
        }

        .btn:hover {
            background-color: #218838;
        }
    </style>
</head>

<body>

    <div class="container">
        <table>
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Libellé</th>
                    <th scope="col">Prix</th>
                    <th scope="col">Quantité</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($produits)) : ?>
                    <?php foreach ($produits as $p) : ?>
                        <tr>
                            <td><?php echo $p['id']; ?></td>
                            <td><?php echo $p['libelle']; ?></td>
                            <td><?php echo number_format($p['prix'], 2, ',', ' '); ?> €</td>
                            <td><?php echo $p['qte']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="4" class="no-data">Aucun produit trouvé.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>

        <div style="text-align:center; margin-top: 30px;">
            <a href="create.php" class="btn">Ajouter un produit</a>
        </div>
    </div>

</body>

</html>
