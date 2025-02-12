<?php

// config.php - Configuration de la base de données
try {
    $pdo = new PDO("mysql:host=localhost;dbname=geststock", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("❌ Erreur de connexion : " . $e->getMessage());
}




// recuperer les donnees envoyees par le formulaire 

$libelle = $_POST['libelle'];
$prix = $_POST['prix'];
$qte = $_POST['qte'];

echo "le produit est $libelle de prix $prix et de qte $qte";



// inserez les donnes dans la table dans base de donnees



try {
    // Préparer et exécuter l'insertion
    $insert = $pdo->prepare("INSERT INTO `products`(`libelle`, `prix`, `qte`) VALUES (?, ?,?)");
    $insert->execute([$libelle, $prix, $qte]);

    // Redirection après insertion pour éviter une double exécution
    header("Location: list.php");
    exit();
} catch (PDOException $e) {
    die("❌ Erreur d'insertion : " . $e->getMessage());
}


