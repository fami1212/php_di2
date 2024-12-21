<?php

// 1. Déclarer la liste des films
$films = [
    [
        "titre" => "Inception",
        "realisateur" => "Christopher Nolan",
        "annee" => 2010,
        "duree" => 48
    ],
    [
        "titre" => "Avatar",
        "realisateur" => "James Cameron",
        "annee" => 2009,
        "duree" => 162
    ],
    [
        "titre" => "Tenet",
        "realisateur" => "Christopher Nolan",
        "annee" => 2020,
        "duree" => 50
    ],
    [
        "titre" => "Quinci",
        "realisateur" => "Armel",
        "annee" => 2024,
        "duree" => 210
    ],
    [
        "titre" => "Armel",
        "realisateur" => "Alioune",
        "annee" => 2024,
        "duree" => 300
    ]
];

// 2. Afficher la liste des films
echo "Liste des films :<br>";
foreach ($films as $film) {
    echo "- Titre : {$film['titre']}, Réalisateur : {$film['realisateur']}, 
    Année : {$film['annee']}, Durée : {$film['duree']} min<br>";
}
echo "<br>";

// 3. Calculer la durée totale de tous les films
$totalMinutes = 0;
foreach ($films as $film) {
    $totalMinutes += $film['duree'];
}


$heures = floor($totalMinutes / 60);
$minutes = $totalMinutes % 60;
echo "Durée totale de tous les films : {$heures} heures et {$minutes} minutes.<br><br>";

// 4. Trouver le film le plus long
$filmPlusLong = $films[0];
foreach ($films as $film) {
    if ($film['duree'] > $filmPlusLong['duree']) {
        $filmPlusLong = $film;
    }
}
echo "Le film le plus long est : {$filmPlusLong['titre']} ({$filmPlusLong['duree']} minutes).<br><br>";

// 5. Créer la fonction film_recent

// function film_recent($annee) {  
//     return $annee > 2010;
// }
// function duree_long($duree) {  
//     return $duree > 60;
// }
// une fonction qui nous trouve le film le plus long 
function film_le_plus_long($films) {
    // Vérifie si le tableau des films n'est pas vide
    if (empty($films)) {
        return null; 
    }

    $filmPlusLong = $films[0];
    foreach ($films as $film) {
        if ($film['duree'] > $filmPlusLong['duree']) {
            $filmPlusLong = $film; // Met à jour le film le plus long
        }
    }

    return $filmPlusLong; 
}


// function film_le_plus_long($films) {
//     if (empty($films)) return null;

//     return array_reduce($films, function($filmPlusLong, $film) {
//         return ($film['duree'] > $filmPlusLong['duree']) ? $film : $filmPlusLong;
//     }, $films[0]);
// }

// // // definir si le film est long ou court

// foreach ($films as $film) {
//     $estlong= duree_long($film['duree']) ? "Long" : "Court";
//     echo "{$film["titre"]} : {$estlong}<br>";
// }
// // 4. Trouver le film le plus long

// echo "<br>";

// // Utiliser la fonction pour classifier les films comme récents ou anciens
// echo "Classification des films :<br>";
// foreach ($films as $film) {
//     $classification = film_recent($film['annee']) ? "Récent" : "Ancien";
//     echo "- {$film['titre']} : {$classification}<br>";
// }
// echo "<br>";

// // 6. Afficher les films d'un réalisateur donné (par exemple, Christopher Nolan)
// $realisateurRecherche = "Christopher Nolan";
// echo "Films réalisés par {$realisateurRecherche} :<br>";
// foreach ($films as $film) {
//     if ($film['realisateur'] === $realisateurRecherche) {
//         echo "- {$film['titre']}<br>";
//     }
// }

// ?>
