<?php

$produits = [
    [
        'nom' => 'Ordinateur Portable',
        'categorie' => 'Informatique',
        'prix' => 1200,
        'quantite' => 10
    ],
    [
        'nom' => 'Casque Audio',
        'categorie' => 'Electronique',
        'prix' => 150,
        'quantite' => 25
    ],
    [
        'nom' => 'Montre Connectée',
        'categorie' => 'Accessoires',
        'prix' => 200,
        'quantite' => 5
    ]
];



function afficher_produits($produits) {
    echo "<table border='1'>";
    echo "<tr><th>Nom</th><th>Catégorie</th><th>Prix</th><th>Quantité</th></tr>";
    
    foreach ($produits as $produit) {
        echo "<tr>
                <td>{$produit['nom']}</td>
                <td>{$produit['categorie']}</td>
                <td>{$produit['prix']} €</td>
                <td>{$produit['quantite']}</td>
              </tr>";
    }

    echo "</table>";
}



function ajouter_produit(&$produits, $nom, $categorie, $prix, $quantite) {
    $produits[] = [
        'nom' => $nom,
        'categorie' => $categorie,
        'prix' => $prix,
        'quantite' => $quantite
    ];
}


