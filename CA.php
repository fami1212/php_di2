<?php
/*******************************************************
 * 1) Jeu de données initial
 *******************************************************/
$ventes = [
    ["region" => "Nord", "mois" => 1, "chiffreAffaires" => 10000],
    ["region" => "Nord", "mois" => 2, "chiffreAffaires" => 15000],
    ["region" => "Casablanca",  "mois" => 1, "chiffreAffaires" => 8000],
    ["region" => "Casablanca",  "mois" => 2, "chiffreAffaires" => 98000],
    ["region" => "Casablanca",  "mois" => 8, "chiffreAffaires" => 19000],
    ["region" => "Meknes",  "mois" => 2, "chiffreAffaires" => 9000],
    ["region" => "Meknes",  "mois" => 2, "chiffreAffaires" => 9000],
    ["region" => "Rabat",  "mois" => 6, "chiffreAffaires" => 9000],
    ["region" => "Rabat",  "mois" => 6, "chiffreAffaires" => 2100],
    ["region" => "Rabat",  "mois" => 9, "chiffreAffaires" => 2100],
    ["region" => "Rabat",  "mois" => 12, "chiffreAffaires" => 9000],
    ["region" => "Rabat",  "mois" => 11, "chiffreAffaires" => 9000],
    ["region" => "Fez",  "mois" => 2, "chiffreAffaires" => 9000],
    ["region" => "Marrakech",  "mois" => 2, "chiffreAffaires" => 9000],
];

/*******************************************************
 * 2) Fonction calculerCAParRegion($ventes)
 *    -> Calcule le chiffre d'affaires total par région.
 *    -> Retourne un tableau associatif de la forme :
 *         [ "Nord" => 25000, "Sud" => 17000, ... ]
 *******************************************************/
function calculerCAParRegion($ventes) {
    // Tableau pour stocker les cumuls par région
    $resultat = [];
    
    // On parcourt chaque entrée du tableau $ventes
    foreach ($ventes as $vente) {
        // On récupère la région et le CA
        $region = $vente['region'];
        $ca     = $vente['chiffreAffaires'];
        
        // Si la région n'est pas encore initialisée, on met 0 comme base
        if (!isset($resultat[$region])) {
            $resultat[$region] = 0;
        }
        
        // On ajoute le chiffre d'affaires dans le cumul
        $resultat[$region] += $ca;
    }
    
    // On retourne le tableau associatif final
    return $resultat;
}

/*******************************************************
 * 3) Fonction calculerMoyenneCAParRegion($ventes)
 *    -> Calcule la moyenne du CA par région.
 *    -> Retourne un tableau associatif de la forme :
 *         [ "Nord" => 12500, "Sud" => 8500, ... ]
 *    (nombre d'entrées = nombre de mois présents pour
 *    chaque région)
 *******************************************************/
function calculerMoyenneCAParRegion($ventes) {
    // On va stocker la somme et le nombre d'entrées
    // pour chaque région afin de calculer la moyenne.
    $sommeParRegion = [];
    $compteParRegion = [];
    
    foreach ($ventes as $vente) {
        $region = $vente['region'];
        $ca     = $vente['chiffreAffaires'];
        
        // Initialisations si nécessaire
        if (!isset($sommeParRegion[$region])) {
            $sommeParRegion[$region] = 0;
            $compteParRegion[$region] = 0;
        }
        
        // On cumule le CA et on incrémente le compteur
        $sommeParRegion[$region]  += $ca;
        $compteParRegion[$region] += 1;
    }
    
    // Maintenant, on calcule la moyenne pour chaque région
    $moyenneParRegion = [];
    foreach ($sommeParRegion as $region => $somme) {
        $moyenne = $somme / $compteParRegion[$region];
        $moyenneParRegion[$region] = $moyenne;
    }
    
    return $moyenneParRegion;
}

/*******************************************************
 * 4) Fonction afficherResumeVentes($ventes)
 *    -> Affiche pour chaque région le CA total
 *       et la moyenne du CA.
 *    -> S'appuie sur les deux fonctions ci-dessus.
 *******************************************************/
function afficherResumeVentes($ventes) {
    // On récupère d'abord le CA total par région
    $totaux = calculerCAParRegion($ventes);
    // Puis la moyenne
    $moyennes = calculerMoyenneCAParRegion($ventes);
    
    echo "<h2>Résumé des ventes par région</h2>";
    echo "<ul>";
    
    // On parcourt les régions présentes dans $totaux
    foreach ($totaux as $region => $caTotal) {
        // On retrouve la moyenne pour cette région
        $moyenne = isset($moyennes[$region]) ? $moyennes[$region] : 0;
        
        echo "<li>";
        echo "<strong>Région :</strong> $region<br>";
        // number_format pour un affichage propre (2 décimales, virgule)
        echo "Chiffre d'affaires total : " . number_format($caTotal, 2, ',', ' ') . " €<br>";
        echo "Moyenne du CA : " . number_format($moyenne, 2, ',', ' ') . " €<br>";
        echo "</li>";
        echo "<hr>";
    }
    
    echo "</ul>";
}

/*******************************************************
 * 5) Exemples de tests et affichages
 *******************************************************/

// a) Tester et afficher le résultat de calculerCAParRegion()
$caParRegion = calculerCAParRegion($ventes);
echo "<pre>";
echo "==> Totaux par région (calculerCAParRegion):\n";
print_r($caParRegion);
echo "</pre>";

// b) Tester et afficher le résultat de calculerMoyenneCAParRegion()
$moyenneParRegion = calculerMoyenneCAParRegion($ventes);
echo "<pre>";
echo "==> Moyennes par région (calculerMoyenneCAParRegion):\n";
print_r($moyenneParRegion);
echo "</pre>";

// c) Enfin, appeler afficherResumeVentes($ventes)
afficherResumeVentes($ventes);

?>
