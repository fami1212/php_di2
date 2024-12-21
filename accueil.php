

<?php
// <!-- Exercice 5 -->
// $somme = 0;
// for ($i = 1; $i <= 10; $i++) {
//     $somme += $i;
// }
// echo "La somme des nombres de 1 à 10 est : " . $somme;


// exercice 6

// $i = 0;
// while ($i <= 20) {
//     echo $i . " ";
//     $i++;
// }


// Exercice 7 : Liste des fruits

// $fruits = ["Pomme", "Banane", "Orange", "Mangue", "Raisin"];

// echo "<ul>";
// for ($i = 0; $i < count($fruits); $i++) {
//     echo "<li>" . $fruits[$i] . "</li>";
// }
// echo "</ul>";


// Exercice 8 : Calcul des notes et moyenne

// $notes = [15, 12, 18, 9, 14,13];
// $somme = 0;

// foreach($notes as $n){
//     $somme = $somme + $n;
// }

// $moyenne = $somme / count($notes);
// echo "La moyenne des notes est : " . $moyenne;


// Exercice 9 : Informations d'un étudiant

// $etudiant = [
//     "nom" => "Dupont",
//     "prenom" => "Jean",
//     "age" => 20
// ];

// foreach ($etudiant as $cle => $valeur) {
//     echo ucfirst($cle) . " : " . $valeur . "<br>";

// }


// Un tableau associatif est créé, contenant des paires clé-valeur :
//     "nom" => "Dupont"
//     "prenom" => "Jean"
//     "age" => 20
//     Chaque clé (par exemple, "nom") représente un attribut de 
//     l'étudiant, et la valeur correspondante (par exemple, "Dupont") 
//     est la donnée de cet attribut.

// Dans chaque itération, on affiche la clé et la valeur de façon lisible :
// ucfirst($cle) : La fonction ucfirst() met en majuscule la première lettre de la 
// clé pour une meilleure lisibilité
//  (par exemple, "nom" devient "Nom").
// . " : " . $valeur . "<br>" : La clé et la valeur sont concaténées 
// avec un symbole ":" et un saut de ligne HTML (<br>), pour un affichage formaté.


// exercice 10 

// $panier = [
//     "Ordinateur" => 1500,
//     "Tablette" => 8000,
//     "Smartphone" => 500,
//     "Casque" => 100
// ];

// $prixTotal=0;


// foreach ($panier as $produit => $prix) {
//     $prixTotal = $prixTotal + $prix; 
// }

// echo " le prix total des article est $prixTotal";








// $prix_total = 0;

// foreach ($panier as $article => $prix) {
//     $prix_total += $prix;
// }

// echo "Le prix total des articles dans le panier est : " . $prix_total;


// Exercice 11:
// Exercice : (informations sur les employés)


// $employes = [
//     [
//         "nom" => "Dupont",
//         "poste" => "Développeur",
//         "salaire" => 3000
//     ],
//     [
//         "nom" => "Martin",
//         "poste" => "Designer",
//         "salaire" => 2800
//     ],
//     [
//         "nom" => "Leroy",
//         "poste" => "Chef de projet",
//         "salaire" => 3500
//     ]
// ];

// // Afficher les informations du deuxième employé
// echo "Nom : " . $employes[2]["nom"] . "<br>";
// echo "Poste : " . $employes[2]["poste"] . "<br>";
// echo "Salaire : " . $employes[2]["salaire"] . "<br>";

















// Exercice 12 : Gestion de produits


$produits = [
    [
        "nom" => "Ordinateur",
        "prix" => 1500,
        "quantite" => 10
    ],
    [
        "nom" => "Tablette",
        "prix" => 800,
        "quantite" => 15
    ],
    [
        "nom" => "Smartphone",
        "prix" => 500,
        "quantite" => 25
    ]
   

];

foreach ($produits as $article) {
    echo "Produit : " . $article["nom"] . "<br>";
    echo "Prix unitaire : " . $article["prix"] . "<br>";
    echo "Quantité : " . $article["quantite"] . "<br>";
    $valeur_article = $article["prix"] * $article["quantite"];

    echo "Valeur totale du stock : " . $valeur_article . "<br><br>";
}