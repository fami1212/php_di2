<?php
/************************************
 * 1) Données de départ
 ************************************/
$ventes = [
    ["region" => "Casablanca", "mois" => 1, "chiffreAffaires" => 10000],
    ["region" => "Casablanca", "mois" => 2, "chiffreAffaires" => 15000],
    ["region" => "Rabat",  "mois" => 1, "chiffreAffaires" => 8000],
    ["region" => "Rabat",  "mois" => 2, "chiffreAffaires" => 9000],
    ["region" => "Marrakech",  "mois" => 4, "chiffreAffaires" => 14000],
    ["region" => "Marrakech",  "mois" => 5, "chiffreAffaires" => 7000],
    ["region" => "Marrakech",  "mois" => 3, "chiffreAffaires" => 6000],
    ["region" => "Marrakech",  "mois" => 3, "chiffreAffaires" => 1000],
    ["region" => "Meknes",  "mois" => 3, "chiffreAffaires" => 20000],
    ["region" => "Meknes",  "mois" => 3, "chiffreAffaires" => 18000],
    ["region" => "Kenitra",  "mois" => 3, "chiffreAffaires" => 13000],
    ["region" => "Oujda",  "mois" => 3, "chiffreAffaires" => 14000],
    // ["region" => " ",  "mois" => 3, "chiffreAffaires" => 0],
];




/************************************
 * 2) Fonction calculerCAParRegion
 *    => renvoie un tableau associatif
 *       [ 'Nord' => somme, 'Sud' => somme, ... ]
 ************************************/
function calculerCAParRegion($ventes)
{
    $result = [];
    
    // Parcours de toutes les entrées du tableau
    foreach ($ventes as $vente) {
        $region = $vente['region'];
        $chiffre = $vente['chiffreAffaires'];
        
        if (!isset($result[$region])) {
            $result[$region] = 0;
        }
        
        // On additionne le CA
        $result[$region] += $chiffre;
    }
    
    return $result;
}

/************************************
 * 3) Fonction calculerMoyenneCAParRegion
 *    => renvoie un tableau associatif
 *       [ 'Nord' => moyenne, 'Sud' => moyenne, ... ]
 ************************************/
function calculerMoyenneCAParRegion($ventes)
{
    // On va stocker deux informations :
    //  - La somme des CA par région
    //  - Le nombre d'entrées (mois) par région
    $sums = [];
    $counts = [];
    
    foreach ($ventes as $vente) {
        $region = $vente['region'];
        $chiffre = $vente['chiffreAffaires'];
        
        if (!isset($sums[$region])) {
            $sums[$region] = 0;
            $counts[$region] = 0;
        }
        
        $sums[$region] += $chiffre;
        $counts[$region] += 1;
    }
    
    // On calcule la moyenne par région
    $moyennes = [];
    foreach ($sums as $region => $sum) {
        $moyennes[$region] = $sum / $counts[$region];
    }
    
    return $moyennes;
}

/************************************
 * 4) Fonction afficherResumeVentes
 *    => affiche le total et la moyenne
 ************************************/
function afficherResumeVentes($ventes)
{
    // On récupère le total par région
    $totaux = calculerCAParRegion($ventes);
    // On récupère la moyenne par région
    $moyennes = calculerMoyenneCAParRegion($ventes);
    
    echo "<h2>Résumé des ventes par région</h2>";
    echo "<ul>";
    
    // On parcourt le tableau des totaux
    foreach ($totaux as $region => $caTotal) {
        // On récupère la moyenne correspondante
        $moyenne = $moyennes[$region];
        
        // Affichage formaté
        echo "<li>";
        echo "<strong>Région : </strong>$region<br>";
        echo "Chiffre d'affaires total : " . number_format($caTotal, 2, ',', ' ') . " €<br>";
        echo "Moyenne du CA : " . number_format($moyenne, 2, ',', ' ') . " €<br>";
        echo "</li>";
        echo "<hr>";
    }
    
    echo "</ul>";
}

/************************************
 * 5) Tests et affichage
 ************************************/
// a) Test : Calculer les totaux par région
$caParRegion = calculerCAParRegion($ventes);
echo "<pre>";
echo "Totaux par région :\n";
print_r($caParRegion);
echo "</pre>";

// b) Test : Calculer les moyennes par région
$moyenneParRegion = calculerMoyenneCAParRegion($ventes);
echo "<pre>";
echo "Moyennes par région :\n";
print_r($moyenneParRegion);
echo "</pre>";

// c) Test : Afficher le résumé
afficherResumeVentes($ventes);
?>
