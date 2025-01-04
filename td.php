<?php
/**
 * Exemple de TD : Gestion d’une Liste d’Employés
 * ---------------------------------------------
 * Code de réponse complet
 */

/****************************************************
 * 1) Déclaration du tableau $employes
 ****************************************************/
$employes = [
    ["nom" => "Dupont",  "departement" => "IT",     "salaire" => 3000, "age" => 28],
    ["nom" => "Durand",  "departement" => "Compta", "salaire" => 2500, "age" => 41],
    ["nom" => "Martin",  "departement" => "IT",     "salaire" => 3200, "age" => 32],
    ["nom" => "Bernard", "departement" => "RH",     "salaire" => 2700, "age" => 45],

];

/****************************************************
 * 2) Fonction calculerMasseSalarialeParDepartement()
 *    - Calcule la somme des salaires par département
 *    - Retourne un tableau associatif : 
 *         [ "IT" => somme, "Compta" => somme, ... ]
 ****************************************************/
function calculerMasseSalarialeParDepartement($employes) {
    // Tableau pour stocker la somme des salaires par département
    $result = [];
    
    // Parcours de tous les employés
    foreach ($employes as $employe) {
        $departement = $employe['departement'];
        $salaire     = $employe['salaire'];
        
        // Initialisation si le département n'existe pas encore dans $result
        if (!isset($result[$departement])) {
            $result[$departement] = 0;
        }
        
        // On additionne le salaire
        $result[$departement] += $salaire;
    }
    
    return $result;
}

/****************************************************
 * 3) Fonction calculerMoyenneAgeParDepartement()
 *    - Calcule la moyenne d'âge par département
 *    - Retourne un tableau associatif : 
 *         [ "IT" => moyenne, "Compta" => moyenne, ... ]
 ****************************************************/
function calculerMoyenneAgeParDepartement($employes) {
    // Pour chaque département, on va stocker la somme des âges
    // et le nombre d'employés concernés
    $sommeAges = [];
    $compteur  = [];
    
    foreach ($employes as $employe) {
        $departement = $employe['departement'];
        $age         = $employe['age'];
        
        // Initialisation si le département n'existe pas encore
        if (!isset($sommeAges[$departement])) {
            $sommeAges[$departement] = 0;
            $compteur[$departement]  = 0;
        }
        
        // On cumule l'âge et on incrémente le nombre d'employés
        $sommeAges[$departement] += $age;
        $compteur[$departement]  += 1;
    }
    
    // Calcul de la moyenne
    $moyennes = [];
    foreach ($sommeAges as $dep => $somme) {
        $moyennes[$dep] = $somme / $compteur[$dep]; 
        // division pour obtenir la moyenne
    }
    
    return $moyennes;
    
}

/****************************************************
 * 4) Script de test
 ****************************************************/

// a) Calculer et afficher la masse salariale par département
$masseSalariale = calculerMasseSalarialeParDepartement($employes);
echo "<h2>1) Masse salariale par département</h2>";
echo "<pre>";
print_r($masseSalariale);
echo "</pre>";

// b) Calculer et afficher la moyenne d'âge par département
$moyenneAge = calculerMoyenneAgeParDepartement($employes);
echo "<h2>2) Moyenne d'âge par département</h2>";
echo "<pre>";
print_r($moyenneAge);
echo "</pre>";

?>
