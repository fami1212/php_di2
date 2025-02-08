<?php

try {
    $pdo = new PDO("mysql:host=localhost;dbname=Omnia-school", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "✅ Connexion réussie !<br>";
} catch (PDOException $e) {
    die("❌ Erreur de connexion : " . $e->getMessage());
}

// Vérifier si le formulaire a été soumis avec des valeurs valides
if (isset($_GET['nom'], $_GET['prenom']) && !empty(trim($_GET['nom'])) && !empty(trim($_GET['prenom']))) {
    $nom = trim($_GET['nom']);
    $prenom = trim($_GET['prenom']);

    try {
        // Préparer et exécuter l'insertion
        $stmt = $pdo->prepare("INSERT INTO `etudiants`(`nom`, `prenom`) VALUES (?, ?)");
        $stmt->execute([$nom, $prenom]);

        // Redirection après insertion pour éviter une double exécution
        header("Location: liste_etudiants.php");
        exit();
    } catch (PDOException $e) {
        die("❌ Erreur lors de l'insertion : " . $e->getMessage());
    }
} else {
    echo "❌ Erreur : Nom et prénom sont obligatoires !";
}
?>
