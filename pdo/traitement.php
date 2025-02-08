<?php



try {
    $pdo = new PDO("mysql:host=localhost;dbname=commerce", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "✅ Connexion réussie !";
} catch (PDOException $e) {
    die("❌ Erreur : " . $e->getMessage());
}


$stmt = $pdo->prepare("INSERT INTO produits (libelle, prix, qtestock) VALUES (?, ?, ?)");

// Insertion de 3 produits
$stmt->execute(['Ordinateur', 1500.00, 10]);
$stmt->execute(['Smartphone', 800.00, 25]);
$stmt->execute(['Imprimante', 300.00, 5]);

echo "✅ Produits insérés avec succès !";
?>



?>
