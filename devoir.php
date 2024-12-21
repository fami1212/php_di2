<?php
// 1. Déclaration du tableau de produits
// On crée un tableau associatif $produits. Chaque entrée correspond à un produit.
// Chacun est un tableau avec les clés : nom, categorie, prix, quantite.
$produits = [
    [
        'nom' => 'Chaussures de sport',
        'categorie' => 'Chaussures',
        'prix' => 59.99,
        'quantite' => 10
    ],
    [
        'nom' => 'T-shirt coton',
        'categorie' => 'Vêtements',
        'prix' => 14.99,
        'quantite' => 25
    ],
    [
        'nom' => 'Smartphone XY',
        'categorie' => 'Électronique',
        'prix' => 299.99,
        'quantite' => 5
    ],
];

// 2. Créer une fonction pour afficher les produits
// La fonction va parcourir le tableau et afficher les informations de chaque produit.
function afficher_produits($produits) {
    if (empty($produits)) {
        echo "Aucun produit disponible.<br>";
        return;
    }

    echo "<h2>Liste des produits :</h2>";
    foreach ($produits as $produit) {
        echo "<ul>";
        echo "<li><strong>Nom :</strong> " . htmlspecialchars($produit['nom']) . "</li>";
        echo "<li><strong>Catégorie :</strong> " . htmlspecialchars($produit['categorie']) . "</li>";
        echo "<li><strong>Prix :</strong> " . number_format($produit['prix'], 2, ',', ' ') . " €</li>";
        echo "<li><strong>Quantité en stock :</strong> " . (int)$produit['quantite'] . "</li>";
        echo "</ul>";
    }
}

// 3. Créer une fonction pour ajouter un produit
// Cette fonction ajoute un produit au tableau $produits. 
// Notez qu'il faut passer $produits par référence (&) si on veut modifier le tableau global.
function ajouter_produit(&$produits, $nom, $categorie, $prix, $quantite) {
    // On peut ajouter une petite vérification pour éviter les doublons de nom :
    foreach ($produits as $p) {
        if (strtolower($p['nom']) === strtolower($nom)) {
            echo "Le produit '$nom' existe déjà, impossible de l'ajouter.<br>";
            return;
        }
    }

    // Ajout du produit
    $produits[] = [
        'nom' => $nom,
        'categorie' => $categorie,
        'prix' => $prix,
        'quantite' => $quantite
    ];
    echo "Le produit '$nom' a été ajouté avec succès.<br>";
}

// 4. Créer une fonction pour modifier un produit
// On modifie un produit existant, identifié par son nom. 
// Si trouvé, on met à jour la catégorie, le prix et la quantité.
function modifier_produit(&$produits, $nom, $newCategorie, $newPrix, $newQuantite) {
    $trouve = false;
    foreach ($produits as &$produit) {
        if (strtolower($produit['nom']) === strtolower($nom)) {
            $produit['categorie'] = $newCategorie;
            $produit['prix'] = $newPrix;
            $produit['quantite'] = $newQuantite;
            $trouve = true;
            echo "Le produit '$nom' a été modifié avec succès.<br>";
            break;
        }
    }

    if (!$trouve) {
        echo "Le produit '$nom' n'existe pas dans le stock.<br>";
    }
}

// 5. Créer une fonction pour supprimer un produit

function supprimer_produit(&$produits, $nom) {
    $indexASupprimer = null;
    foreach ($produits as $index => $produit) {
        if (strtolower($produit['nom']) === strtolower($nom)) {
            $indexASupprimer = $index;
            break;
        }
    }

    if ($indexASupprimer !== null) {
        unset($produits[$indexASupprimer]);

        $produits = array_values($produits);
        echo "Le produit '$nom' a été supprimé avec succès.<br>";
    } else {
        echo "Le produit '$nom' n'existe pas dans le stock.<br>";
    }
}

// 6. Créer une fonction pour vérifier le stock d'un produit
// La fonction renvoie true si la quantité > 0, false sinon.
function verifier_stock($produits, $nom) {
    foreach ($produits as $produit) {
        if (strtolower($produit['nom']) === strtolower($nom)) {
            return $produit['quantite'] > 0;
        }
    }
    // Si le produit n'est pas trouvé, on peut considérer qu'il n'est pas en stock.
    return false;
}

// ---------------------
// Exemples d'utilisation
// ---------------------

// Afficher les produits initiaux
afficher_produits($produits);

// Ajouter un produit
ajouter_produit($produits, "Casquette rouge", "Accessoires", 9.99, 15);

// Afficher après ajout
afficher_produits($produits);

// Modifier un produit
modifier_produit($produits, "T-shirt coton", "Vêtements de sport", 19.99, 30);

// Afficher après modification
afficher_produits($produits);

// Supprimer un produit
supprimer_produit($produits, "Casquette rouge");

// Afficher après suppression
afficher_produits($produits);

// Vérifier le stock d'un produit
$nomProduitAVerifier = "Smartphone XY";
if (verifier_stock($produits, $nomProduitAVerifier)) {
    echo "Le produit '$nomProduitAVerifier' est en stock.<br>";
} else {
    echo "Le produit '$nomProduitAVerifier' est en rupture de stock.<br>";
}

?>
