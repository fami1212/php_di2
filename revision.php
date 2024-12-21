<?php

// echo "Bienvenue aux nouveaux";





// $nom="Ibrahima";
// $age= 23;

// echo "je m'appelle $nom et j'ai $age ans";



// operateurs arithmetiques + - * /


// $a=40;
// $b= 30;

// $somme= $a +     $b;

// echo "la somme est $somme";


// operateur de comparaison ==, >, <; !=

// $a=11;
// $b=16;


// if($a==$b){
//     echo "a et b sont egaux";
// }elseif($a<$b){
//     echo "a est inférieur à b";
// }else{
//     echo "a est superieur à b";
// }








// calculer la surface d'un rectangle en creant deux variables
// $longueur et $largeur 

// $longueur= 10;
// $largeur= 30;

// $surface= $longueur * $largeur;

// echo " la surface est $surface .m2";




// la conversion d'un montant en euros vers dollars 




// $euro= 1000;
// $taux = 0.98;

// $montant = $euro * $taux;

// echo "le montant en dollars est $montant $";





//  boucle for pour calculer la somme des nombres  de 1 à 10

// $somme=0;

// for ($i= 1; $i<=10; $i++) {

//     $somme= $somme + $i;
// }

// echo "$somme";


// $fruits= ["kaki","pomme","ananas","orange","banane"];

// $fruit= $fruits[0];

// echo "$fruit";


// nom , prenom, age 

$etudiant=[

    "Nom" => "Ndiaye",
    "Prenom" => "Mamadou",
    "Age" => 20,

];
$nom= $etudiant['Nom'];
$prenom= $etudiant['Prenom'];
$age= $etudiant['Age'];

echo "l'age de l'etudiant est $age"."<br>";
echo "le nom de l'etudiant est $nom"."<br>";
echo "le prenom de l'etudiant est $prenom";



?>