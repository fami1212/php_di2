<?php

try {
    $pdo = new PDO("mysql:host=localhost;dbname=Omnia-school", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "✅ Connexion réussie !";
} catch (PDOException $e) {
    die("❌ Erreur : " . $e->getMessage());
}




    $nom = $_GET['nom'];
    $prenom = $_GET['prenom'];

    // Correction : suppression des guillemets autour de ? et ajout du paramètre dans execute()
    $stmt = $pdo->prepare("INSERT INTO `etudiants`(`nom`,`prenom`) VALUES (?,?)");
    $stmt->execute([$nom,$prenom]);  // Passage de la valeur à execute()

    // Redirection cohérente
    header("Location: liste_etudiants.php"); // Redirection vers la liste des étudiants
    exit();

?>
