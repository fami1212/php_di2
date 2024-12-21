<?php

// Données de base
$produits = [
    ['id' => 1, 'nom' => 'Ordinateur Portable', 'prix' => 1200, 'stock' => 10],
    ['id' => 2, 'nom' => 'Casque Audio', 'prix' => 150, 'stock' => 25],
    ['id' => 3, 'nom' => 'Montre Connectée', 'prix' => 200, 'stock' => 5],
];

$clients = [
    ['id' => 1, 'nom' => 'Alice Dupont', 'email' => 'alice@example.com'],
    ['id' => 2, 'nom' => 'Bob Martin', 'email' => 'bob@example.com'],
];

$commandes = [
    [
        'id' => 1,
        'id_client' => 1,
        'produits' => [
            ['id_produit' => 1, 'quantite' => 1],
            ['id_produit' => 2, 'quantite' => 2],
        ],
        'date' => '2024-12-02',
    ],
];

// 1. Afficher les produits disponibles
function afficher_produits($produits) {
    echo "Produits disponibles :\n";
    foreach ($produits as $produit) {
        echo "- {$produit['nom']} (Prix : {$produit['prix']} €, Stock : {$produit['stock']})\n";
    }
    echo "\n";
}

// 2. Ajouter un produit
function ajouter_produit(&$produits, $id, $nom, $prix, $stock) {
    foreach ($produits as $produit) {
        if ($produit['id'] === $id) {
            echo "Erreur : Un produit avec cet ID existe déjà.\n";
            return;
        }
    }
    $produits[] = ['id' => $id, 'nom' => $nom, 'prix' => $prix, 'stock' => $stock];
    echo "Produit ajouté avec succès : $nom.\n\n";
}

// 3. Rechercher un produit
function rechercher_produit($produits, $id) {
    foreach ($produits as $produit) {
        if ($produit['id'] === $id) {
            return $produit;
        }
    }
    return null;
}

// 4. Ajouter un client
function ajouter_client(&$clients, $id, $nom, $email) {
    foreach ($clients as $client) {
        if ($client['email'] === $email) {
            echo "Erreur : Un client avec cet email existe déjà.\n";
            return;
        }
    }
    $clients[] = ['id' => $id, 'nom' => $nom, 'email' => $email];
    echo "Client ajouté avec succès : $nom.\n\n";
}

// 5. Passer une commande
function passer_commande(&$commandes, &$produits, $id_client, $produits_commandes) {
    $commande = ['id' => count($commandes) + 1, 'id_client' => $id_client, 'produits' => [], 
    'date' => date('Y-m-d')];
    foreach ($produits_commandes as $commande_produit) {
        $produit = rechercher_produit($produits, $commande_produit['id_produit']);
        if (!$produit) {
            echo "Erreur : Produit avec l'ID {$commande_produit['id_produit']} introuvable.\n";
            return;
        }
        if ($produit['stock'] < $commande_produit['quantite']) {
            echo "Erreur : Stock insuffisant pour le produit {$produit['nom']}.\n";
            return;
        }
        // Mise à jour du stock
        foreach ($produits as &$p) {
            if ($p['id'] === $commande_produit['id_produit']) {
                $p['stock'] -= $commande_produit['quantite'];
                break;
            }
        }
        // Ajouter à la commande
        $commande['produits'][] = $commande_produit;
    }
    $commandes[] = $commande;
    echo "Commande passée avec succès.\n\n";
}

// 6. Historique des commandes d'un client
function historique_client($commandes, $id_client){
    echo "Historique des commandes pour le client $id_client :\n";
    foreach ($commandes as $commande) {
        if ($commande['id_client'] === $id_client) {
            echo "- Commande #{$commande['id']} (Date : {$commande['date']}):\n";
            foreach ($commande['produits'] as $produit) {
                echo "  * Produit ID : {$produit['id_produit']}, Quantité : {$produit['quantite']}\n";
            }
        }
    }
    echo "\n";
}

// Tests
afficher_produits($produits);
echo "<br>",
ajouter_produit($produits, 4, 'Tablette', 500, 20);
echo "<br>",
afficher_produits($produits);
echo "<br>",

$produit = rechercher_produit($produits, 2);
print_r($produit);
echo "<br>",

ajouter_client($clients, 3, 'Charlie Brown', 'charlie@example.com');
echo "<br>",

passer_commande($commandes, $produits, 1, [
    ['id_produit' => 1, 'quantite' => 2],
    ['id_produit' => 3, 'quantite' => 1],
]);
echo "<br>",

historique_client($commandes, 1);

?>
